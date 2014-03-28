<?php

//установки для дебага
ini_set('display_errors',1);
ini_set('register_globals','Off');

function handleError($err_no, $err_str, $err_file, $err_line, array $err_context)
{
    // error was suppressed with the @-operator
    if (0 === error_reporting()) {
        return false;
    }

    throw new ErrorException($err_str, 0, $err_no, $err_file, $err_line);
}
set_error_handler('handleError');

define ('TARGET','_devel');

define('DIR',dirname(__FILE__).'/..');
define('BIN',DIR.'/bin');
define('ETC',DIR.'/etc');
define('PROC',DIR.'/proc');
define('LOG',DIR.'/log');

define('LIVEHOST','10.154.28.203');


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
define('NAS_PATH','/mnt/raid1/mx/video');

define("INDEX",1);
require(BIN."/func.php");

//FOR VLC
define('TLSTART',44300);
define('TLPWD','12345');
define('HTSTART',8100);
define('VLCBIN','cvlc');
define('VLCD','-d');
define('VLCNETCACHE',500);
define('VLCSOUTCACHE',200);

require_once BIN.'/class/exceptions.class.php';
require_once BIN.'/class/types.class.php';
require_once BIN.'/class/config.class.php';
require_once BIN."/class/telnet.class.php";
require_once BIN."/class/vlm.class.php";
require_once BIN.'/class/nas.class.php';
require_once BIN.'/class/vlc.class.php';


function open_db($h,$u,$p,$n,$utf=1) {
    $db = new mysqli($h,$u,$p,$n);
    if($utf){
        if(!$db->query("SET character_set_client='utf8'")) throw new MysqlQueryException();
        if(!$db->query("SET character_set_connection='utf8'")) throw new MysqlQueryException();
        if(!$db->query("SET character_set_results='utf8'")) throw new MysqlQueryException();
    }

    return $db;
}


