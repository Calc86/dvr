<?php

namespace app\modules\dvr\controllers;

use app\modules\dvr\components\application\factory\FileStreamFactory;
use app\modules\dvr\components\telnet\Telnet;
use app\modules\dvr\components\telnet\Telnet2;
use app\modules\dvr\components\vlc2\Config;
use Graze\TelnetClient\TelnetClient;
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
        //$data = $telnet->read();
        return $data;
    }
}
