<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 29.03.14
 * Time: 16:48
 */

namespace system;

/**
 * class DVR
 * Система управления камерами
 * @package system
 */
abstract class DVR implements IDVR {
    /**
     * @var \UserID
     */
    private $uid;

    /**
     * @var ICamCreator
     */
    private $cams;

    /**
     * @param \UserID $uid
     */
    function __construct(\UserID $uid)
    {
        $this->uid = $uid;
    }

    /**
     * @param ICamCreator $cams
     */
    public function setCams(ICamCreator $cams)
    {
        $this->cams = $cams;
    }

    /**
     * @return ICamCreator
     */
    public function getCams()
    {
        return $this->cams;
    }

    /**
     * @param \CamID $camID
     * Отдать камеру по id
     * @return ICam
     */
    public function getCam(\CamID $camID)
    {
        return $this->getCams()[$camID->get()];
    }


    /**
     * @return \UserID
     */
    public function getUid()
    {
        return $this->uid;
    }

    public function restart()
    {
        $this->stop();
        sleep(1);
        $this->start();
    }

    public function startup()
    {
        $this->shutdown();
        sleep(1);
        $this->start();
    }

    public function shutdown(){
        $this->stop();
    }

    /**
     * time routine
     * @return void
     */
    public function update()
    {
        foreach($this->getCams() as $cam){
            /** @var Cam $cam */
            $cam->update();
        }
    }


} 