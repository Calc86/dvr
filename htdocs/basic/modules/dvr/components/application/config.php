<?php

//установки для дебага
use app\modules\dvr\components\mysql\MysqlQueryException;

ini_set('display_errors',1);
ini_set('register_globals','Off');

/**
 * @param $err_no
 * @param $err_str
 * @param $err_file
 * @param $err_line
 * @param array $err_context
 * @return bool
 * @throws ErrorException
 */
function handleError($err_no, $err_str, $err_file, $err_line, array $err_context)
{
    // error was suppressed with the @-operator
    if (0 === error_reporting()) {
        return false;
    }

    throw new ErrorException($err_str, 0, $err_no, $err_file, $err_line);
}
set_error_handler('handleError', E_ALL);

define('DIR', realpath(dirname(__FILE__).'/..'));
define('BIN', realpath(DIR.'/bin'));
define('ETC', realpath(DIR.'/etc'));
define('PROC', realpath(DIR.'/proc'));
define('LOG', realpath(DIR.'/log'));
define('TMP', realpath(DIR.'/tmp'));
define('IMG', realpath(DIR.'/img'));

if(file_exists(DIR.'/../devel')){
    define ('TARGET','_devel');
    define('LIVEHOST','10.154.28.203');
}
else if(file_exists(DIR.'/../tv')){
    define ('TARGET','_test');
    define('LIVEHOST','10.154.28.191');
}
else{
    define ('TARGET','');
    define('LIVEHOST','10.154.28.202');
}


define('MYHOST','10.154.28.207');
define('MYUSER','bb');
define('MYPASS','bbpass');
define('MYDB','bb'.TARGET);

/*
 * Обязательно в fstab должно быть прописано правило
 */
//in fstab
// 10.154.28.40:/mnt/raid1/mx/video /home/vlc/vlc/mount nfs auto,users 0 0
define('NAS_HOST','10.154.28.212');
define('NAS_PATH','/mnt/raid1/mx/video'.TARGET);

define("INDEX",1);
require(BIN . "/func.php");

//FOR VLC
define('TLSTART',44300);
define('TLPWD','12345');
define('HTSTART',8100);
define('VLC_STREAM_PORT_START', 9000);
define('VLC_L_FLV_PORT_START', 11000);
define('VLC_RE_FLV_PORT_START', 13000);
define('VLCBIN','cvlc -vvv');
define('VLCD','-d');
define('VLC_USE_LOG', true);       //можно отключить лог для vlc

if(file_exists(DIR.'/../tv')){
    define('VLCSOUTCACHE', 5000);
    define('VLCNETCACHE', 5000);
    define('VLC_LIVE_CACHE', 5000);
}
else{
    define('VLCSOUTCACHE', 300);
    define('VLCNETCACHE', 500);
    define('VLC_LIVE_CACHE', 500);
}

//FOR MOTION
define('MOTION_USE_LOG', false);     //вкл, выкл лог motion
define('MOTION_HTTP_PORT', 33300);
define('MOTION_HTTP_HOST', 'localhost');
define('MOTION_HTTP_USER', 'motion');
define('MOTION_HTTP_PASS', '12345');
define('MOTION_HTTP_LOCALHOST', 'off');
define('MOTION_HTTP_HTML', 'on');

define('MOTION_STREAM_PORT', 55300);
define('MOTION_STREAM_LOCALHOST', 'off');

define('SOCKET_TIMEOUT', 3);

define('TIME_LOCK_RECORD', (600-30));   //10m
define('TIME_LOCK_TIMELAPSE', (1*60*60-30));    //1h
//define('TIME_LOCK_TIMELAPSE', (3*60-30));

define('RECORDS_KEEP', 30);

//nginx
define('NGINX_MOTION_SECURE_LINK_HASH','motion{expire}{motion_stream_port}');

require_once BIN . '/class/Database.php';
require_once BIN . '/class/exceptions.class.php';
require_once BIN . '/class/types.class.php';
require_once BIN . '/class/config.class.php';
require_once BIN . "/class/telnet.class.php";
require_once BIN . "/class/vlm.class.php";
require_once BIN . '/class/nas.class.php';
require_once BIN . '/class/vlc.class.php';

/**
 * @param $h
 * @param $u
 * @param $p
 * @param $n
 * @param int $utf
 * @return mysqli
 * @throws MysqlQueryException
 */
function open_db($h,$u,$p,$n,$utf=1) {
    $db = new mysqli($h,$u,$p,$n);
    if($utf){
        if(!$db->query("SET character_set_client='utf8'")) throw new MysqlQueryException();
        if(!$db->query("SET character_set_connection='utf8'")) throw new MysqlQueryException();
        if(!$db->query("SET character_set_results='utf8'")) throw new MysqlQueryException();
    }

    return $db;
}

/**
 * @return float
 */
function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}
