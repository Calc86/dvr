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
class DVR implements IDVR {
    protected $id = -1; //-1 for debug
    /**
     * @var IUser
     */
    protected $user;

    /**
     * @var array
     */
    private $daemons = array();

    private $cams = array();

    /**
     * @param IUser $user
     */
    function __construct(IUser $user)
    {
        $this->user = $user;
        $this->id = $user->getID();
    }

    /**
     * @param ICam $cam
     */
    public function addCam(ICam $cam){
        $this->cams[$cam->getID()] = $cam;
    }

    /**
     * @param $camID
     * @return Cam|null
     */
    public function getCam($camID){
        if(isset($this->cams[$camID]))
            return $this->cams[$camID];
        else return null;
    }

    /**
     * @param Daemon $daemon
     */
    public function addDaemon(Daemon $daemon){
        $this->daemons[] = $daemon;
    }

    /**
     * @return int
     */
    public function getID()
    {
        return $this->id;
    }

    /**
     * @return array
     */
    public function getCamIDs(){
        $ids = array();
        foreach($this->cams as $cam){
            /** @var $cam Cam */
            $ids[] = $cam->getID();
        }

        return $ids;
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
        /*foreach($this->cams as $cam){
            /** @var $cam ICam*/
            /*$cam->stop();
            sleep(1);
            $cam->start();
        }*/

        $this->stopCams();
        $this->stopDaemons();
        sleep(1);
        $this->startDaemons();
        $this->startCams();
    }

    public function update()
    {
        $this->log(__FUNCTION__);

        foreach($this->cams as $cam){
            /** @var $cam ICam*/
            $cam->update();
        }

        //вставить в лог дату и время
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
        Log::getInstance($this->id)->put($message, $this);
    }

    //----------------

    private function startCams(){
        $this->log(__FUNCTION__);
        foreach($this->cams as $cam){
            /** @var $cam ICam*/
            $cam->create();
            $cam->start();
        }
    }

    private function startDaemons(){
        $this->log(__FUNCTION__);

        foreach($this->daemons as $daemon){
            /** @var $daemon Daemon*/
            $daemon->start();
        }
    }

    private function stopDaemons(){
        $this->log(__FUNCTION__);
        foreach($this->daemons as $daemon){
            /** @var $daemon Daemon*/
            $daemon->stop();
        }
    }

    private function stopCams(){
        $this->log(__FUNCTION__);

        foreach($this->cams as $cam){
            /** @var $cam ICam*/
            $cam->stop();
            $cam->delete();
        }
    }

    /**
     * @return IUser
     */
    public function getUser(){
        return $this->user;
    }
}
