<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 12.05.14
 * Time: 14:25
 */

require_once __DIR__ . '/../config.php';

require_once __DIR__ . '/include.php';

date_default_timezone_set('Europe/Moscow');

\system2\EchoLog::getInstance()->put(__FILE__, "main");

//if(file_exists(DIR.'/../tv')){
if(file_exists(\system2\Path::getRoot().'/../tv')){
    $factory = \system2\TVFactory::getInstance();

}
else{
    $factory = \system2\BBFactory::getInstance();
}
$s = $factory::getInstance()->createSystem();
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
        if($s->getLock()->isLock())
            $s->update();
        break;
    case 'control':
        $s->control();
        break;
    case 'serialize':
        print_r(unserialize(serialize($s)));
        break;
    case 'event':
        if($argc < 7 ) die(usage());
        list($file, $command, $userID, $camID, $eventName, $timestamp, $csvParams) = $argv;

        $s->event($userID, $camID, $eventName, $timestamp, $csvParams);
        break;
    case 'test':
        echo "just test\n";
        break;
    case 'clear':
        $s->clear();
        break;
    default:
        die(usage());
}

/**
 * @return string
 */
function usage(){
    return "start/stop/restart/update/control*/clear/event(userID, camID, name, timestamp, csvParams)\n";
}

