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

$host = get_var('h', 'localhost');
$path = get_var('path','/');

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

echo getJpeg($port, $host, $path);


/**
 * @param $port
 * @param $host
 * @param $path
 * @return string
 */
function getJpeg($port, $host, $path){
    $fp = false;

    try{
        $fp = fsockopen ($host, $port, $errno, $errstr, 10);
    }
    catch (Exception $e){
        //тут может быть лог, но мы его не будем выводить
        return "Ошибка открытия потока\n $errstr";
    }
    if (!$fp) {
        echo "поток не доступен\n";
    } else {
        fputs ($fp, "GET $path HTTP/1.0\r\n\r\n");

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
        $bufLength = 1024;

        for($i=0; $i < ceil($length/$bufLength); $i++){
            $buf.= fread($fp, $bufLength);
        }

        fclose($fp);
        return substr($buf, 0, $length);
    }
    return "";
}
