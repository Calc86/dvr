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

class System implements ISystem{
    /**
     * @var ISystem
     */
    private static $instance = null;

    /**
     * Команды вызываемые в конце update метода, устанавливаются через addCommand();
     * @var array
     */
    private $commands = array();

    //runtime flags
    const FLAG_STOP = 'stop';
    private $flags = array();

    private $events = array();

    /**
     * @var Lock
     */
    private $lock;

    /**
     * @var array of IUser
     */
    private $users;

    /**
     *
     */
    private function __construct()
    {
        Log::getInstance()->put(__FUNCTION__, $this);

        Path::createAll();

        $this->lock = new Lock('system');

        $this->create();
    }

    /**
     * @param IUser $user
     */
    protected function addUser(IUser $user){
        $this->users[$user->getID()] = $user;
    }

    /**
     * @param $userID
     * @return User|null
     */
    protected function getUser($userID){
        if(isset($this->users[$userID]))
            return $this->users[$userID];
        else return null;
    }

    /**
     * Добавить комманду, которая будет вызвана в конце update
     * @param ICommand $command
     */
    public function addCommand(ICommand $command){
        $this->commands[] = $command;
    }

    /**
     * Получить текущий флаг...
     * @param $flag
     * @return bool
     */
    public function getFlag($flag){
        if(isset($this->flags[$flag])) return $this->flags[$flag];
        return false;
    }

    /**
     * Установить флаг
     * @param $flag
     */
    protected  function setFlag($flag){
        $this->flags[$flag] = true;
    }

    /**
     * @param $flag
     */
    protected function resetFlag($flag){
        $this->flags[$flag] = false;
    }

    /**
     * Возвращает нужный класс, возможно наследование
     * @return ISystem|static
     */
    public static function getInstance(){
        if(self::$instance == null) return (self::$instance = new static);
        else return self::$instance;
    }


    final protected function create()
    {
        Log::getInstance()->put(__FUNCTION__, $this);

        $users = AbstractFactory::getInstance()->createUsers();

        foreach($users as $user){
            $this->addUser($user);
        }
    }

    final public function start()
    {
        Log::getInstance()->put(__FUNCTION__, $this);

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
                Log::getInstance()->put(__FUNCTION__.':'.$user->getID()." ".$e->getMessage(), $this);
            }
        }
    }

    final public function stop()
    {
        Log::getInstance()->put(__FUNCTION__, $this);

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
                Log::getInstance()->put(__FUNCTION__.':'.$user->getID()." ".$e->getMessage(), $this);
            }
        }

        //$this->recPts();
        //$this->update();  //no update on stop!!!
        //(new \BashCommand('php '.BIN.'util/rec-pts.php'))->exec();*/
    }


    final public function restart()
    {
        Log::getInstance()->put(__FUNCTION__, $this);

        $lock = new Lock(__FUNCTION__);
        if(!$lock->create()) return;
        $this->stop();
        sleep(1);
        $this->start();
        $lock->delete();
    }

    final public function update()
    {
        Log::getInstance()->put(__FUNCTION__, $this);
        $lock = new Lock(__FUNCTION__);
        if(!$lock->create()) return;
        $this->_update();

        while(($command = array_shift($this->commands)) != null){
            /** @var $command ICommand */
            $command->execute();
        }

        $lock->delete();
    }

    protected function _update(){
        foreach($this->users as $user){
            /** @var $user IUser */
            try{
                $user->update();
            }
            catch(\Exception $e){
                Log::getInstance()->put(__FUNCTION__.':'.$user->getID()." ".$e->getMessage(), $this);
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

    /**
     * @param $userID
     * @param $camID
     * @param $eventName
     * @param $timestamp
     * @param $csvParams
     */
    final public function event($userID, $camID, $eventName, $timestamp, $csvParams){
        $user = $this->getUser($userID);
        if($user==null)
            $cam = null;
        else
            $cam = $user->getDVR(0)->getCam($camID);
        if($csvParams == "")
            $params = array();
        else
            $params = str_getcsv($csvParams);

        $this->_event($user, $cam, $eventName, $timestamp, $params);
    }

    /**
     * @param User $user
     * @param Cam $cam
     * @param $eventName
     * @param $timestamp
     * @param array $params
     */
    protected function _event($user,$cam, $eventName, $timestamp, array $params){
        if(isset($this->events[$eventName])){
            $event = $this->events[$eventName];
            /** @var $event Event */
            $event->handle($user, $cam, $timestamp, $params);
        }
    }

    /**
     * @param Event $event
     * @return mixed|void
     */
    public function addEvent(Event $event){
        $this->events[$event->getName()] = $event;
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
