<?php
/*
  proxy для motion
    работает с камерами ubiquti
    также в будущем планируется исползовать для ресайза картинок от камер, так как они могут быть свосем уебищьными,
    а должны быть кратны 16
    Берет стоп кадр с камеры и отдает его в брауезр (или в motion)
 */
require("/home/vlc/vlc/bin/config.php");

set_time_limit(10);

$cid = get_var('cid',0);

if(!$cid) die("Не указана камера");

$key = "cam_$cid";

$cam = apc_fetch($key);

if($cam == FALSE){
    $db = Database::getInstance();
    $q = "select c.ip as ip, cs.stop_auth as mode, cs.stop_port as port, c.user as user, c.pass as pass, cs.stop_path as path from cams as c, cam_settings as cs where c.id=$cid and c.id=cs.cam_id limit 1" ;
    $r = $db->query($q);
    if(!$r->num_rows) die("Камера не найдена");
    $cam = $r->fetch_object();
    $r->free();
    $db->getDB()->close();
//echo $q; print_r($cam); exit();

    apc_store($key, $cam, 10);
}

switch ($cam->mode){
    case 'ubqt':
        $ip = $cam->ip;
        $port = $cam->port;
        $user = $cam->user;
        $pass = $cam->pass;
        $path = "/snapshot.cgi";

        $tmp = TMP;
        $ck = "$tmp/ck_$cid.txt";
        $url = "http://$ip:$port/login.cgi";
        $jpg = "$tmp/snap_$cid.jpg";
        //$cmd = "curl -c $ck $url && curl -o $jpg -LH 'Expect:' -b $ck -F username=$user -F password=$pass -F uri=$path $url";
        //$cmd = "curl -c $ck $path -o $jpg";
        //$cmd = "curl -c $ck http://$ip:$port$path";
        $cmd = "curl -LH 'Expect:' -b $ck http://$ip:$port/snapshot.cgi";
        $data = shell_exec($cmd);

        if($data[0] == "<" || strlen($data) == 0 || strlen($data) < 1500){
            if(file_exists($jpg))
                unlink($jpg);
            $cmd = "curl -c $ck $url && curl -o $jpg -LH 'Expect:' -b $ck -F username=$user -F password=$pass -F uri=$path $url";
            exec($cmd);
            if(!file_exists($jpg))
                usleep(100000);
            $data = file_get_contents($jpg);
            /*else
                $data = "";*/
        }

        /*if($cid==8){
            $log = $tmp."/log_$cid.txt";
            file_put_contents($log, date("Y-m-d H:i:s = ").$cmd."\n", FILE_APPEND);
            file_put_contents($log, strlen($data)."\n", FILE_APPEND);
        }*/

        header('Content-type: image/jpeg');
        //php-gd лечит кривые jpeg, но всё равно нужно будет делать restart on_camera_lost, или делать рестарт при update?
        if($data != ''){
            $im = imagecreatefromstring($data);
            imagejpeg($im);
        }
        else echo $data;

        break;

    //еще не реализовано
    case 'http':
        //echo 1; exit;
        $url = "http://".$cam->ip.":".$cam->port."/".$cam->path;
        //echo $url;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_USERPWD, $cam->user.":".$cam->pass);
        $data = curl_exec($ch);
        curl_close($ch);
        header('Content-type: image/jpeg');
        echo $data;
        /*$im = imagecreatefromstring($data);
        imagejpeg($im);*/
        break;
    case 'noauth':
    default:
        header('Content-type: image/jpeg');
        $data = file_get_contents("http://".$cam->ip.":".$cam->port."/".$cam->path);
        $im = imagecreatefromstring($data);
        imagejpeg($im);
        break;
}

exit;
