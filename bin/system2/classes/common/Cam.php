<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 12.05.14
 * Time: 15:42
 */

namespace system2;

/**
 * Задает основной алгоритм работы камеры в системе (потоки и т.д.)
 * Class Cam
 * @package system2
 */
abstract class Cam implements ICam{

    protected $id = 0;

    /**
     * @var ICamSettings
     */
    protected $cs = null;

    /**
     * @var IDVR
     */
    protected $dvr;
    //protected $streams = array();
    /**
     * @var ICamStream
     */
    protected $stream;

    /**
     * @param IDVR $dvr
     * @param ICamSettings $cs
     */
    function __construct(IDVR $dvr, ICamSettings $cs)
    {
        $this->id = $cs->getID();

        $this->log(__FUNCTION__);

        $this->dvr = $dvr;
        $this->setSettings($cs);
        $this->create();
    }

    /**
     * Создает стрим (new)
     * @return void
     */
    abstract function createStream();

    /**
     * @return int
     */
    public function getID(){
        return $this->id;
    }

    final public function create()
    {
        $this->log(__FUNCTION__);

        $this->createStream();
    }

    public function delete(){
        $this->log(__FUNCTION__);
    }

    public function start()
    {
        $this->log(__FUNCTION__);

        $this->stream->start();

    }

    public function stop()
    {
        $this->log(__FUNCTION__);

        $this->stream->stop();
    }

    public function restart()
    {
        $this->log(__FUNCTION__);
        $this->stream->restart();
    }

    public function update()
    {
        $this->log(__FUNCTION__);
        $this->create();    //need to fill cam array!!!
        $this->stream->update();
    }

    /**
     * @return IDVR
     */
    public function getDVR()
    {
        return $this->dvr;
    }

    /**
     * @return CamSettings|ICamSettings
     */
    public function getSettings()
    {
        return $this->cs;
    }

    /**
     * @param ICamSettings $cs
     */
    public function setSettings(ICamSettings $cs)
    {
        $this->cs = $cs;
    }

    /**
     * @param $message
     */
    public function log($message)
    {
        Log::getInstance($this->getID())->put($message, __CLASS__);
    }
}
