<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 29.03.14
 * Time: 20:06
 */
require_once dirname(__FILE__).'/../config.php';

require_once dirname(__FILE__).'/include.php';

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
    case 'restart':
        if($argc<3) {echo usage(); break;};
        $s->user_stop(new UserID($argv[2]));
        sleep(1);
        $s->user_start(new UserID($argv[2]));
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
    case 'live':
        /**
         * заглушка для восстановления связи раз в 10 секунд на канале live
         */
        $start = time();
        while((time() - $start) < 40){
            $s->live();
            sleep(10);
        }
        break;
    case 'update':
        $s->update();
        break;
    default:
        die(usage());
}

/**
 * @return string
 */
function usage(){
    return "startup/shutdown/start(u)/stop(u)/restart(u)/c_start(p,c,p)/u_stop(u,c,p)/c_update(u,c)/update/live\n";
}

