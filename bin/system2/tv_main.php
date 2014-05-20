<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 12.05.14
 * Time: 14:25
 */

require_once __DIR__.'/../config.php';

require_once __DIR__.'/include.php';

date_default_timezone_set('Europe/Moscow');

\system2\EchoLog::getInstance()->put(__FILE__);
$s = new \system2\TVSystem();
//$s = new \system\FileSystem("/home/vlc/vlc/bin/system/tv.m3u");
if($argc<2) die(usage());

$cmd = $argv[1];

switch($cmd){
    case 'start';
        $s->start();
        break;
    case 'stop':
        $s->stop();
        break;
    case 'restart':
        $s->restart();
        break;
    case 'update':
        $s->update();
        break;
    case 'control':
        $s->control();
        break;
    default:
        die(usage());
}

/**
 * @return string
 */
function usage(){
    return "start/stop/restart/update/control*\n";
}

