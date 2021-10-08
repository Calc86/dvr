<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 29.03.14
 * Time: 16:56
 */

namespace system;

/**
 * Interface IDVR
 * @package system
 */
interface IDVR {
    public function start();
    public function stop();
    public function restart();

    /**
     * @return bool
     */
    public function isStarted();
    public function kill();
    public function startup();
    public function shutdown();

    /**
     * time routine
     * @return void
     */
    public function update();

    /**
     * rerun live stream (to avoid disconnect and broken pipe
     * @return void
     */
    public function live();

    /**
     * @param \CamID $camID
     * Отдать камеру по id
     * @return Cam
     */
    public function getCam(\CamID $camID);

    /**
     * @return array of ICam
     */
    public function getCams();

    /**
     * create timelaps file
     * @return mixed
     */
    public function timelaps();
} 