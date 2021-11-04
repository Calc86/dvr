<?php

namespace app\modules\dvr\commands;

use app\modules\dvr\components\application\factory\FileStreamFactory;
use app\modules\dvr\components\common\AbstractFactory;
use app\modules\dvr\components\common\System;
use app\modules\dvr\components\EchoLog;
use app\modules\dvr\components\interfaces\ISystem;
use yii\console\Controller;

/**
 * Основной контроллер для управления системой записи
 *
 * from htdocs/basic/modules/dvr/components/bin/main.php
 */
class OldDvrController extends Controller
{
    private AbstractFactory $factory;
    private ISystem $system;

    public function init()
    {
        parent::init();
        // init console log
        EchoLog::getInstance();
        $this->factory = FileStreamFactory::getInstance();

        $this->system = $this->factory->createSystem();
    }

    public function actionStart() {
        $this->system->start();
    }

    public function actionStop() {
        $this->system->stop();
    }
}
