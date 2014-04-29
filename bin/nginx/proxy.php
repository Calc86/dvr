<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 23.04.14
 * Time: 15:37
 *
 * забирает с motion stream порта и отдает в браузер (img)
 * Необходимо для раздачи каждому своей ссылки.
 * Жизнь ссылки сделаем 10 секунд... :)
 * $motion_stream_key => CamID
 */

define('MOTION_STREAM_KEY', 'msk');

require("/home/vlc/vlc/bin/config.php");

$port = get_var('p',0);
if($port == 0) die('не указан параметр');

/*$key = "snap_$port";

$img = apc_fetch($key);

if($img != false){
    echo $img;
    flush();
    apc_delete($key);
    apc_store($key, getJpeg($port),5);
}
else{
    $img = getJpeg($port);
    echo $img;
    flush();
    apc_store($key, $img,5);
}*/

echo getJpeg($port);


/**
 * @param $port
 * @return string
 */
function getJpeg($port){
    $fp = false;

    try{
        $fp = fsockopen ("localhost", $port, $errno, $errstr, 10);
    }
    catch (Exception $e){
        //тут может быть лог, но мы его не будем выводить
        return "Ошибка открытия потока\n $errstr";
    }
    if (!$fp) {
        echo "поток не доступен\n";
    } else {
        fputs ($fp, "GET / HTTP/1.0\r\n\r\n");

        $param = 'header'; $time[$param] = microtime(true);
        $header = '';
        while (($str = trim(fgets($fp, 4096))) != false)
            $header.= $str;
        //header($header);

        $a = fgets($fp);
        $a = fgets($fp);    //Content type
        header($a);
        $l = fgets($fp);
        $a = fgets($fp);
        $a = explode(':',$l);

        $length = (int)trim($a[1]);
        //echo $length;
        //echo "\n=========\n";
        $buf = '';

        for($i=0; $i < ceil($length/8192); $i++){
            $buf.= fread($fp, 8192);
        }

        fclose($fp);
        return substr($buf, 0, $length);
    }
    return "";
}
