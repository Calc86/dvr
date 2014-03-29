<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 29.03.14
 * Time: 20:06
 */
require_once dirname(__FILE__).'/../config.php';

require_once dirname(__FILE__).'/System.php';
require_once dirname(__FILE__).'/User.php';

require_once dirname(__FILE__).'/dvr/IDVR.php';
require_once dirname(__FILE__).'/dvr/DVR.php';
require_once dirname(__FILE__).'/dvr/Vlc.php';

require_once dirname(__FILE__).'/cam/ICam.php';
require_once dirname(__FILE__).'/cam/ICamCreator.php';
require_once dirname(__FILE__).'/cam/ICamStream.php';
require_once dirname(__FILE__).'/cam/ICamStreamCreator.php';
require_once dirname(__FILE__).'/cam/Cam.php';

require_once dirname(__FILE__).'/cam/mysql/MysqlCamCreator.php';
require_once dirname(__FILE__).'/cam/mysql/MysqlCamStream.php';
require_once dirname(__FILE__).'/cam/mysql/MysqlCamStreamCreator.php';


//$dvr = new \system\Vlc(new UserID(1));
//$user = new \system\User(new UserID(1), $dvr);

//$user->getDvr()->start();

$s = new \system\System();
if($argc<2) die(usage());

$cmd = $argv[1];

switch($cmd){
    case 'startup';
        $s->startup();
        break;
    case 'shutdown':
        $s->shutdown();
        break;
    case 'start':
        if($argc<3) {echo usage(); break;};
        $s->user_start(new UserID($argv[2]));
        break;
    case 'stop':
        if($argc<3) {echo usage(); break;};
        $s->user_stop(new UserID($argv[2]));
        break;
    case 'c_start':
        if($argc<5) {echo usage(); break;};
        $s->cam_play(new UserID($argv[2]), new CamID($argv[3]), new CamPrefix($argv[4]));
        break;
    case 'c_stop':
        if($argc<5) {echo usage(); break;};
        $s->cam_stop(new UserID($argv[2]), new CamID($argv[3]), new CamPrefix($argv[4]));
        break;
    case 'c_update':
        if($argc<4) {echo usage(); break;};
        $s->cam_update(new UserID($argv[2]), new CamID($argv[3]));
        break;
    default:
        die(usage());
}

/**
 * @return string
 */
function usage(){
    return "startup/shutdown/u_start(u)/u_stop(u)/c_start(p,c,p)/u_stop(u,c,p)\n";
}

