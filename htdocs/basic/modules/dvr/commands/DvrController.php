<?php

namespace app\modules\dvr\commands;

use dvr\system\common\System;
use dvr\system\common\SystemException;
use dvr\system\vlc\Vlc;
use yii\console\Controller;

class DvrController extends Controller
{
    private System $system;

    /**
     * @throws SystemException
     */
    public function init()
    {
        parent::init();

        $this->system = new System();
        $dvr = new Vlc($this->system);
        $this->system->addDvr($dvr);
        // file input
        $s1 = $dvr->createSource('test', 'file:///mnt/data/test/104.mp4');
        // http output
        $o1 = $dvr->createOutput($s1, Vlc::OUT_LIVE);
    }

    public function actionStart()
    {
        $this->system->start();
    }

    public function actionStop()
    {
        $this->system->stop();
    }

    public function actionStatus()
    {
        $this->system->status();
    }
}
