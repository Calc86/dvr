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
     * @var CamSettings
     */
    protected $cs = null;

    /**
     * @var IDVR
     */
    protected $dvr;
    protected $streams = array();

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
    }

    /**
     * @return int
     */
    public function getID(){
        return $this->id;
    }

    final public function create()
    {
        $this->log(__FUNCTION__);

        $this->_create();
    }

    abstract protected function _create();

    public function delete(){
        $this->log(__FUNCTION__);
    }

    public function start()
    {
        $this->log(__FUNCTION__);

        foreach($this->streams as $stream){
        /** @var $stream ICamStream */
            $stream->create();
        }

        foreach($this->streams as $stream){
            /** @var $stream ICamStream */
            $stream->start();
        }
    }

    public function stop()
    {
        $this->log(__FUNCTION__);

        foreach(array_reverse($this->streams) as $stream){
        //foreach($this->streams as $stream){
            /** @var $stream ICamStream */
            $stream->stop();
        }
    }

    public function restart()
    {
        $this->log(__FUNCTION__);
        foreach($this->streams as $stream){
            /** @var $stream ICamStream */
            $stream->restart();
        }
    }

    public function update()
    {
        $this->log(__FUNCTION__);
        $this->create();    //need to fill cam array!!!
        foreach($this->streams as $stream){
            /** @var $stream ICamStream */
            $stream->update();
        }
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
