<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 12.05.14
 * Time: 15:37
 */

namespace system2;

/**
 * Class System
 * @package system2
 */

abstract class System implements ISystem{
    /**
     * @var ISystem
     */
    private static $instance = null;

    //runtime flags
    const FLAG_STOP = 'stop';
    private $flags = array();

    /**
     * @var Lock
     */
    private $lock;

    /**
     * @var array of IUser
     */
    protected $users;

    /**
     *
     */
    private function __construct()
    {
        Log::getInstance()->put(__FUNCTION__, __CLASS__);

        Path::createAll();

        $this->lock = new Lock('system');

        $this->create();
    }

    public function getFlag($flag){
        if(isset($this->flags[$flag])) return $this->flags[$flag];
        return false;
    }

    protected  function setFlag($flag){
        $this->flags[$flag] = true;
    }

    protected function resetFlag($flag){
        $this->flags[$flag] = false;
    }

    public static function getInstance(){
        if(self::$instance == null) return (self::$instance = new static);
        else return self::$instance;
    }


    public function create()
    {
        Log::getInstance()->put(__FUNCTION__, __CLASS__);

        foreach($this->users as $user){
            /** @var $user IUser */
            $user->create();
        }
    }

    final public function start()
    {
        Log::getInstance()->put(__FUNCTION__, __CLASS__);

        $lock = new Lock(__FUNCTION__);
        if(!$lock->create()) return;
        if(!$this->lock->create()) return;

        $this->_start();
        $lock->delete();
    }

    protected function _start(){
        foreach($this->users as $user){
            /** @var $user IUser */
            try{
                $user->start();
            }
            catch(\Exception $e){
                Log::getInstance()->put(__FUNCTION__.':'.$user->getID()." ".$e->getMessage(), __CLASS__);
            }
        }
    }

    final public function stop()
    {
        Log::getInstance()->put(__FUNCTION__, __CLASS__);

        $this->setFlag(System::FLAG_STOP);

        //$lock = new Lock(__FUNCTION__);
        //if(!$lock->create()) return;
        $this->update();
        $this->_stop();
        //$lock->delete();
        $this->lock->delete();

        Lock::resetAll();
    }

    protected function _stop(){
        foreach($this->users as $user){
            /** @var $user IUser */
            try{
                $user->stop();
            }
            catch(\Exception $e){
                Log::getInstance()->put(__FUNCTION__.':'.$user->getID()." ".$e->getMessage(), __CLASS__);
            }
        }

        //$this->recPts();
        //$this->update();  //no update on stop!!!
        //(new \BashCommand('php '.BIN.'util/rec-pts.php'))->exec();*/
    }


    final public function restart()
    {
        Log::getInstance()->put(__FUNCTION__, __CLASS__);

        $lock = new Lock(__FUNCTION__);
        if(!$lock->create()) return;
        $this->stop();
        sleep(1);
        $this->start();
        $lock->delete();
    }

    final public function update()
    {
        Log::getInstance()->put(__FUNCTION__, __CLASS__);
        $lock = new Lock(__FUNCTION__);
        if(!$lock->create()) return;
        $this->_update();
        $lock->delete();
    }

    protected function _update(){
        foreach($this->users as $user){
            /** @var $user IUser */
            try{
                $user->update();
            }
            catch(\Exception $e){
                Log::getInstance()->put(__FUNCTION__.':'.$user->getID()." ".$e->getMessage(), __CLASS__);
            }
        }

        //test timelaps !!!
        //$this->timelaps();

        //делаем перенос из pre папок
        //делаем синхронно, чтобы не забивать канал сети. Так же ждем выполнения, чтобы не перезаписать файлы пир долгом переносе.
        //$this->recPts();
    }

    /*final public function timelaps()
    {
        Log::getInstance()->put(__FUNCTION__, __CLASS__);
        $lock = new Lock(__FUNCTION__);
        if(!$lock->create()) return;
        $this->_timelaps();
        $lock->delete();
    }

    protected function _timelaps(){
        //return;

        foreach($this->users as $user){
            /** @var $user IUser */
            /*$user->timelaps();
        }
    }*/

    public function control()
    {

    }

    /*public function recPts()
    {
        Log::getInstance()->setUserID(0);
        Log::getInstance()->put(__FUNCTION__, __CLASS__);

        $lock = new Lock(__FUNCTION__);
        if(!$lock->create()) return;
        $this->_recPts();
        $lock->delete();
    }*/

    /*protected function _recPts(){

    }*/
}
