<?php

//установки для дебага
ini_set('display_errors',1);
ini_set('register_globals','Off');


define('DIR',dirname(__FILE__).'/..');
define('BIN',DIR.'/bin');
define('ETC',DIR.'/etc');
define('PROC',DIR.'/proc');
define('LOG',DIR.'/log');

define('LIVEHOST','10.154.28.202');

define('MYHOST','10.154.28.207');
define('MYUSER','bb');
define('MYPASS','bbpass');
define('MYDB','bb');

/*
 * Обязательно в fstab должно быть прописано правило
 */
//in fstab
// 10.154.28.40:/mnt/raid1/mx/video /home/vlc/vlc/mount nfs auto,users 0 0
define('NAS_HOST','10.154.28.40');
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

require_once BIN.'/class/Type.php';
require_once BIN.'/class/config.class.php';
require_once BIN."/class/telnet.class.php";
require_once BIN."/class/vlm.class.php";
require_once BIN.'/class/nas.class.php';
require_once BIN.'/class/vlc.class.php';

?>
