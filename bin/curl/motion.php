<?php
/*
  proxy для motion
    работает с камерами ubiquti
    также в будущем планируется исползовать для ресайза картинок от камер, так как они могут быть свосем уебищьными,
    а должны быть кратны 16
 */
require("/home/vlc/vlc/bin/config.php");

$cid = get_var('cid',0);

if(!$cid) die("Не указана камера");

$db = Database::getInstance();
$q = "select c.ip as ip, cs.stop_auth as mode, cs.stop_port as port, c.user as user, c.pass as pass from cams as c, cam_settings as cs where c.id=$cid";
$r = $db->query($q);
if(!$r->num_rows) die("Камера не найдена");
$cam = $r->fetch_object();
//print_r($cam); exit();

switch ($cam->mode){
    //HTTP авторизация, обычно на камерах DLink
    case 'dlink':
        $url = "http://$ip:$port/$path";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_USERPWD, "$user:$pass");
        $result = curl_exec($ch);
        curl_close($ch);

        $im = imagecreatetruecolor(640,368);
        $imc = imagecreatefromstring($result);
        imagecopy($im,$imc,0,0,0,0,640,360);
        header('Content-type: image/jpeg');
        imagejpeg($im);


        //echo $result;

        break;
    case 'ubqt':
        $cid = 1;
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

        header('Content-type: image/jpeg');
        if($data[0] == "<"){
            $cmd = "curl -c $ck $url && curl -o $jpg -LH 'Expect:' -b $ck -F username=$user -F password=$pass -F uri=$path $url";
            exec($cmd);
            echo file_get_contents($jpg);
        }
        else
        {
            echo $data;
        }
        break;

    //еще не реализовано
    case 'http':
    default:
        $url = "http://www.example.com/protected/";   
        $ch = curl_init();       
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);    
        curl_setopt($ch, CURLOPT_URL, $url);    
        curl_setopt($ch, CURLOPT_USERPWD, "myusername:mypassword");    
        $result = curl_exec($ch);    
        curl_close($ch);    
        echo $result;   
        break;
}


