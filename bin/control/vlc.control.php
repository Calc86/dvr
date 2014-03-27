<?php
/*
 * Скрипт запуска vlc без всяких файлов
 */

require_once dirname(__FILE__).'/../config.php';

$db = open_db(MYHOST, MYUSER, MYPASS, MYDB);

/*
require_once BIN.'/class/config.class.php';
require_once BIN."/class/telnet.class.php";
require_once BIN.'/class/vlc.class.php';
 */

//#Usage:./vlc.start {start} org_name
//$DIR/bin/vlc.start.sh $1 ruben 4 -d
if ($argc < 3) {
    die(usage());
}

$uid = $argv[2];
$cmd = $argv[1];

$vlc = new vlc($uid);

mysql_close($db);

switch($cmd){
    case 'start':
        $vlc->start();
        break;
    case 'stop':
        $vlc->stop();
        break;
    case 'restart':
        $vlc->restart();
        break;
    case 'kill':
        $vlc->kill();
        break;
    case 'ps_kill':
        $vlc->ps_kill();
        break;
    case 'status':
        $vlc->status();
        break;
    case 'mount':
        $vlc->mount();
        break;
    case 'un_mount':
        $vlc->un_mount();
        break;
    case 'status':
        $vlc->status();
        break;
    case 'is_run':
        echo $vlc->is_run();
        break;
    default:
        echo usage();
}

function usage() {
    return 'Usage: start/stop/status/is_run/restart/kill/ps_kill uid' . PHP_EOL;
}

?>
