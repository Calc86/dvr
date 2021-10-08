<?php
/*
 * Скрипт нужно проверять на отдельно взятых камерах и дописывать в комменты с какими камерами заработало.
 */
require("../config.php");

$cid = get_var('cid',0);

if(!$cid) exit();

//$mode = get_var('mode','proxy');

$q = "select * from cam where id=$cid";
$r = mysql_query($q);
$row = mysql_fetch_array($r);

$mode = $row['mtn-mode'];

$ip = $row['cam-ip'];
$port = $row['mtn-port'];
$path= $row['mtn-path'];
$user = $row['mtn-user'];
$pass = $row['mtn-pass'];

switch ($mode){
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
    //cockie авторизация
    case 'ubqt':
        $dir = "/home/calc/vlc/www/curl";
        $ck = "$dir/tmp/$cid.txt";
        $url = "http://$ip:$port/login.cgi";
        $jpg = "$dir/tmp/$cid.jpg";
        //$cmd = "curl -c $ck $url && curl -o $jpg -LH 'Expect:' -b $ck -F username=$user -F password=$pass -F uri=$path $url";
        //exec($cmd);
        $cmd = "curl -c $ck $url && curl -LH 'Expect:' -b $ck -F username=$user -F password=$pass -F uri=$path $url";
        echo $cmd;
        header('Content-type: image/jpeg');
        echo shell_exec($cmd);
        //$buf = file_get_contents($jpg);
        //echo $buf;
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



?>
