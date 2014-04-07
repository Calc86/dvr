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
abstract class DVR extends Daemon implements IDVR {

    /**
     * @var ICamCreator
     */
    private $cams;

    /**
     * @param \UserID $uid
     */
    function __construct(\UserID $uid)
    {
        parent::__construct($uid, 'dvr');
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