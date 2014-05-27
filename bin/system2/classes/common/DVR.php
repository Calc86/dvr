<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 12.05.14
 * Time: 15:43
 */

namespace system2;

/**
 * Class DVR
 * @package system2
 */
//abstract class DVR extends Daemon implements IDVR {
abstract class DVR implements IDVR {
    protected $id = -1; //-1 for debug
    /**
     * @var IUser
     */
    protected $user;

    /**
     * @var array
     */
    protected $daemons = array();

    protected $cams = array();

    /**
     * @param IUser $user
     */
    function __construct(IUser $user)
    {
        $this->user = $user;
        $this->id = $user->getID();
        //parent::__construct($user->getID(), 'dvr');
    }

    /**
     * @return int
     */
    public function getID()
    {
        return $this->id;
    }

    public function create()
    {
        $this->log(__FUNCTION__);
    }

    public function start()
    {
        $this->log(__FUNCTION__);

        $this->startDaemons();
        $this->startCams();
    }

    public function stop()
    {
        $this->log(__FUNCTION__);

        $this->stopCams();
        $this->stopDaemons();
    }

    public function restart()
    {
        $this->log(__FUNCTION__);
        foreach($this->cams as $cam){
            /** @var $cam ICam*/
            $cam->stop();
            sleep(1);
            $cam->start();
        }
    }

    public function update()
    {
        $this->log(__FUNCTION__);
        foreach($this->cams as $cam){
            /** @var $cam ICam*/
            $cam->update();
        }

        foreach($this->daemons as $d){
            /** @var Daemon $d */
            $date = new \BashCommand("echo `date` >> {$d->getLogFile()}");
            $date->exec();
        }
    }

    /**
     * @param $message
     */
    public function log($message)
    {
        Log::getInstance($this->id)->put($message, __CLASS__);
    }

    //----------------

    protected function startCams(){
        $this->log(__FUNCTION__);
        foreach($this->cams as $cam){
            /** @var $cam ICam*/
            $cam->create();
            $cam->start();
        }
    }

    protected function startDaemons(){
        $this->log(__FUNCTION__);
        foreach($this->daemons as $daemon){
            /** @var $daemon Daemon*/
            $daemon->start();
        }
    }

    protected function stopDaemons(){
        $this->log(__FUNCTION__);
        foreach($this->daemons as $daemon){
            /** @var $daemon Daemon*/
            $daemon->stop();
        }
    }

    protected function stopCams(){
        $this->log(__FUNCTION__);

        // TODO: Разобраться с этой ерезью
        foreach($this->cams as $cam){
            /** @var $cam ICam*/
            $cam->create();
            $cam->stop();
            $cam->delete();
        }
    }
}
