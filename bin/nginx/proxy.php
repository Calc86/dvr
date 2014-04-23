<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 23.04.14
 * Time: 15:37
 *
 * забирает с motion stream порта и отдает в браузер (img)
 * Необходимо для раздачи каждому свое ссылки.
 * Жизнь ссылки сделаем 10 секунд... :)
 * $motion_stream_key => CamID
 */

define('MOTION_STREAM_KEY', 'msk');

require("/home/vlc/vlc/bin/config.php");

$set = get_var('set',0);
if($set == 1){
    $cid = get_var('cid', 0);
    $secure = md5(time().rand());
    $secure=1;
    $msk = MOTION_STREAM_KEY.'_'.$secure;


    apc_store($msk, $cid, 100);
    echo $secure;
    exit;
}

$secure = get_var('s');
if($secure === 0) die('не указан параметр');

$msk = MOTION_STREAM_KEY.'_'.$secure;
$cid = apc_fetch($msk);
if($cid == FALSE) die('неверная ссылка');
if(!$cid) die("Не указана камера");

//отдать картинку
$fp = false;

try{
    $fp = fsockopen ("localhost", MOTION_STREAM_PORT+$cid, $errno, $errstr, 100);
}
catch (Exception $e){
    //тут может быть лог, но мы его не будем выводить
    echo "Ошибка открытия потока\n";
}
if (!$fp) {
    //echo "$errstr ($errno)<br>\n";
    echo "поток не доступен\n";
} else {
    fputs ($fp, "GET / HTTP/1.0\r\n\r\n");
    while (($str = trim(fgets($fp, 4096))) != false)
        header($str);
    fpassthru($fp);
    fclose($fp);
}
