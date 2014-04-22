<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 09.04.14
 * Time: 14:58
 */

namespace system;

/**
 * Class MotionVlc
 * vlc with motion
 * @package system
 */
class MotionVlc extends Vlc {
    /**
     * @var Motion
     */
    private $motion;

    /**
     * @param \UserID $uid
     * @param CamCreator $camCreator
     */
    function __construct(\UserID $uid, CamCreator $camCreator)
    {
        parent::__construct($uid, $camCreator);

        $this->motion = new Motion($this->getUid());
    }

    public function start()
    {
        Log::getInstance()->put(__FUNCTION__, __CLASS__);
        parent::start();

        foreach($this->getCams() as $cam){
            /** @var Cam $cam */
            $camMotion = $cam->getCamMotion();
            if($camMotion != null ) $this->motion->addThread($camMotion);
        }

        $this->motion->start();
    }

    public function stop()
    {
        Log::getInstance()->put(__FUNCTION__, __CLASS__);
        //$this->motion->stop();
        $this->motion->shutdown();

        parent::stop();
    }
} 