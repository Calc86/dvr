<?php

namespace app\modules\dvr\controllers;

use app\modules\dvr\components\application\factory\FileStreamFactory;
use app\modules\dvr\components\telnet\Telnet2;
use app\modules\dvr\components\vlc2\Config;
use yii\web\Controller;

class DvrController extends Controller
{
    public function actionIndex() {
        $factory = FileStreamFactory::getInstance();
        $config = new Config();     //TODO 20211027
        $command = 'show';

        $telnet = new Telnet2();
        $telnet->connect($config->host, $config->telnetPort + 1 );
        $telnet->auth($config->telnetPassword);
        $data = $telnet->write($command);

        //http://localhost:8101/requests/vlm.xml
        /*
         *
<?xml version="1.0" encoding="utf-8" standalone="yes" ?>
<vlm><broadcast name="CAM_101_live" enabled="yes" loop="yes">
<output>#std{access=http{mime=video/mp4},mux=ts{use-key-frames},dst=*:9101/cam_101}</output>
<inputs><input>file:///mnt/data/test/104.mp4</input></inputs><options></options><instances>
<instance name="default" state="playing" position="0.957041" time="1287150598" length="1344927000" rate="1.000000" title="0" chapter="0" can-seek="1" playlistindex="1" /></instances>
</broadcast>
<broadcast name="CAM_101_lhttp" enabled="yes" loop="yes">
<output>#std{access=livehttp{seglen=5,delsegs=true,numsegs=15,splitanywhere=true,index=/mnt/data/tmpfs/lhttp/1/stream-101.m3u8,index-url=http://localhost:81/lhttp/1/stream-101-########.ts},mux=ts{use-key-frames},dst=/mnt/data/tmpfs/lhttp/1/stream-101-########.ts}</output>
<inputs><input>http://localhost:9101/cam_101</input></inputs><options></options><instances>
<instance name="default" state="playing" position="0.000000" time="1279331923" length="0" rate="1.000000" title="0" chapter="0" can-seek="0" playlistindex="1" /></instances>
</broadcast>
</vlm>
         */
        //$data = $telnet->read();
        return $data;
    }
}
