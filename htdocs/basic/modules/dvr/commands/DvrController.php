<?php

namespace app\modules\dvr\commands;

use dvr\system\common\System;
use dvr\system\common\SystemException;
use dvr\system\ffmpeg\HlsCommand;
use dvr\system\ffmpeg\HlsOutput;
use dvr\system\vlc\Vlc;
use yii\console\Controller;

/**
 *
 */
class DvrController extends Controller
{
    private System $system;

    private const URI_TEST = 'file:///mnt/data/test/104.mp4';

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
        $s1 = $dvr->createSource('test', self::URI_TEST);
        // http output
        $o1 = $dvr->createOutput($s1, Vlc::OUT_HTTP);
        $dvr->createOutput($o1, Vlc::OUT_HLS2);
        $dvr->createOutput($o1, Vlc::OUT_REC);
//        $dvr->addOutput(new HlsOutput($dvr, $s1, HlsCommand::SIZE_1080P));
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
