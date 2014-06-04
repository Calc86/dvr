<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 12.05.14
 * Time: 15:41
 */

namespace system2;

/**
 * Class User
 * @package system2
 */
abstract class User implements IUser {
    protected $id;

    /**
     * @var array
     */
    protected $dvrs = array();

    /**
     * @param $id
     */
    function __construct($id)
    {
        $this->id = $id;
        $this->log(__FUNCTION__);

        //$this->create();
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

        foreach($this->dvrs as $dvr){
            /** @var $dvr IDVR */
            $dvr->create();
        }
    }

    abstract protected function _create();

    public function start()
    {
        $this->log(__FUNCTION__);
        foreach($this->dvrs as $dvr){
            /** @var $dvr IDVR */
            $dvr->start();
        }
    }

    public function stop()
    {
        $this->log(__FUNCTION__);
        foreach($this->dvrs as $dvr){
            /** @var $dvr IDVR */
            $dvr->stop();
        }
    }

    public function restart()
    {
        $this->log(__FUNCTION__);
        foreach($this->dvrs as $dvr){
            /** @var $dvr IDVR */
            $dvr->restart();
        }
    }

    public function update()
    {
        $this->log(__FUNCTION__);
        foreach($this->dvrs as $dvr){
            /** @var $dvr IDVR */
            $dvr->update();
        }
    }

    /**
     * @param $message
     */
    public function log($message)
    {
        Log::getInstance($this->id)->put($message, __CLASS__);
    }


}
