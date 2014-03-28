<?php
/*
 * тест скрипт по контролю камер 
 */

require_once dirname(__FILE__).'/../config.php';

if ($argc < 5) {
    die(usage());
}

$uid=new UserID($argv[2]);
$cid=new CamID($argv[3]);
$pref=new CamPrefix($argv[4]);

$cmd = $argv[1];

$db = open_db(MYHOST, MYUSER, MYPASS, MYDB);

$vlc = new cam_control_archive($uid,$cid,$pref);

switch($cmd){
    case 'play':
        $vlc->play();
        break;
    case 'stop':
        $vlc->stop();
        break;
    case 'show':    //ни чего не выводит
        $vlc->show();
        break;
    case 'delete':
        $vlc->delete();
        break;
    default:
        echo usage1();
}
echo $vlc->message();

$db->close();

function usage1() {
    return 'Usage: play/stop/show/delete uid cid live/rec/mtn' . PHP_EOL;
}

