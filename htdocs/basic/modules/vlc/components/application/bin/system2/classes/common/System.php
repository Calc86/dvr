<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 12.05.14
 * Time: 15:37
 */

namespace system2;

use app\modules\vlc\components\ICommand;
use app\modules\vlc\components\ISystem;
use app\modules\vlc\components\IUser;
use Exception;

/**
 * Class System
 * @package system2
 */
class System implements ISystem
{
    /**
     * @var ?ISystem
     */
    private static ?ISystem $instance = null;

    /**
     * Команды вызываемые в конце update один раз метода, устанавливаются через addCommand();
     * @var array
     */
    private array $commandsQueue = [];

    /**
     * Команды вызываемые в конце каждого update метода, устанавливаются через addPermanentCommand();
     * @var array
     */
    private array $permanentCommands = [];

    //runtime flags
    const FLAG_STOP = 'stop';
    private array $flags = [];

    /**
     * Список обработчиков events
     * @var array
     */
    private array $eventHandlers = [];

    /**
     * @var Lock
     */
    private Lock $lock;

    /**
     * @var array of IUser
     */
    private array $users;

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
     * @return Lock
     */
    public function getLock(): Lock
    {
        return $this->lock;
    }

    /**
     * @param IUser $user
     */
    protected function addUser(IUser $user)
    {
        $this->users[$user->getID()] = $user;
    }

    /**
     * @param $userID
     * @return User|null
     */
    protected function getUser($userID): ?User
    {
        return $this->users[$userID] ?? null;
    }

    /**
     * Добавить команду, которая будет вызвана в конце update
     * @param ICommand $command
     */
    public function addCommand(ICommand $command)
    {
        $this->commandsQueue[] = $command;
    }

    /**
     * Добавить команду, которая будет вызвана в конце update
     * @param ICommand $command
     */
    public function addPermanentCommand(ICommand $command)
    {
        $this->permanentCommands[] = $command;
    }

    /**
     * Получить текущий флаг...
     * @param $flag
     * @return bool
     */
    public function getFlag($flag): bool
    {
        if (isset($this->flags[$flag])) return $this->flags[$flag];
        return false;
    }

    /**
     * Установить флаг
     * @param $flag
     */
    protected function setFlag($flag)
    {
        $this->flags[$flag] = true;
    }

    /**
     * @param $flag
     */
    protected function resetFlag($flag)
    {
        $this->flags[$flag] = false;
    }

    /**
     * Возвращает нужный класс, возможно наследование
     * @return ISystem|static
     */
    public static function getInstance()
    {
        if (self::$instance == null) return (self::$instance = new static);
        else return self::$instance;
    }

    /**
     * @param $userID
     * @param $camID
     * @return null
     */
    final public function getUserCam($userID, $camID): ?Cam
    {
        /** @var User $user */
        $user = $this->users[$userID];
        /** @var Cam $cam */
        //$stream = $cam->getStream()->get()
        return $user->getCam($camID);
    }


    final protected function create()
    {
        Log::getInstance()->put(__FUNCTION__, $this);

        $users = AbstractFactory::getInstance()->createUsers();

        foreach ($users as $user) {
            $this->addUser($user);
        }
    }

    final public function start()
    {
        Log::getInstance()->put(__FUNCTION__, $this);

        if ($this->isStarted() == true) return;

        $lock = new Lock(__FUNCTION__);
        if (!$lock->create()) return;
        //if(!$this->lock->create()) return;

        $this->_start();
        $lock->delete();

        $this->setStarted(true);
    }

    protected function _start()
    {
        foreach ($this->users as $user) {
            /** @var $user IUser */
            try {
                $user->start();
            } catch (Exception $e) {
                Log::getInstance()->put(__FUNCTION__ . ':' . $user->getID() . " " . $e->getMessage(), $this);
            }
        }
    }

    final public function stop()
    {
        Log::getInstance()->put(__FUNCTION__, $this);

        $this->setStarted(false);

        $this->setFlag(System::FLAG_STOP);

        //$lock = new Lock(__FUNCTION__);
        //if(!$lock->create()) return;
        //$this->update();
        $this->_stop();
        //$lock->delete();

        $this->executeCommands();
        $this->executePermanentCommands();

        Lock::resetAll();

        /*$clear = new \BashCommand("rm -rf ".Path::getTmpfsPath()."/*");
        $clear->exec();*/
    }

    protected function _stop()
    {
        foreach ($this->users as $user) {
            /** @var $user IUser */
            try {
                $user->stop();
            } catch (Exception $e) {
                Log::getInstance()->put(__FUNCTION__ . ':' . $user->getID() . " " . $e->getMessage(), $this);
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
        if (!$lock->create()) return;
        $this->stop();
        sleep(1);
        $this->start();
        $lock->delete();
    }

    /**
     * Update это heartbeat по крону раз в минуту
     */
    final public function update()
    {
        if (!$this->lock->isLock()) return;
        Log::getInstance()->put(__FUNCTION__, $this);
        $lock = new Lock(__FUNCTION__);
        if (!$lock->create()) return;
        //пользовательский update
        $this->_update();

        //выполняем очереди команд.
        $this->executeCommands();
        $this->executePermanentCommands();

        $lock->delete();
    }

    final private function executeCommands()
    {
        //одноразовые команды
        while (($command = array_shift($this->commandsQueue)) != null) {
            /** @var $command ICommand */
            $command->execute();
        }
    }

    final private function executePermanentCommands()
    {
        //команды на каждый раз
        foreach ($this->permanentCommands as $command) {
            /** @var $command ICommand */
            $command->execute();
        }
    }

    protected function _update()
    {
        foreach ($this->users as $user) {
            /** @var $user IUser */
            try {
                $user->update();
            } catch (Exception $e) {
                Log::getInstance()->put(__FUNCTION__ . ':' . $user->getID() . " " . $e->getMessage(), $this);
            }
        }
    }

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
    final public function event($userID, $camID, $eventName, $timestamp, $csvParams)
    {
        if (!$this->lock->isLock()) return;

        $user = $this->getUser($userID);
        if ($user == null)
            $cam = null;
        else
            $cam = $user->getDVR($user->getID())->getCam($camID);
        if ($csvParams == "")
            $params = array();
        else
            $params = str_getcsv($csvParams);

        $this->_event($user, $cam, $eventName, $timestamp, $params);

        $this->executeCommands();
    }

    /**
     * @param User $user
     * @param Cam $cam
     * @param $eventName
     * @param $timestamp
     * @param array $params
     */
    protected function _event(User $user, Cam $cam, $eventName, $timestamp, array $params)
    {
        if (isset($this->eventHandlers[$eventName])) {
            $event = $this->eventHandlers[$eventName];
            /** @var $event Event */
            $event->handle($user, $cam, $timestamp, $params);
        }
    }

    /**
     * @param Event $event
     * @return void
     */
    public function addEventHandler(Event $event)
    {
        if (!isset($this->eventHandlers[$event->getName()])) {
            $this->eventHandlers[$event->getName()] = new Events($event->getName());
        }
        /** @var Events $events */
        $events = $this->eventHandlers[$event->getName()];
        $events->add($event);
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
    public function clear()
    {
    }

    /**
     * Запущена ли система
     * @return bool
     */
    public function isStarted(): bool
    {
        return $this->lock->isLock();
    }

    /**
     * @param $bool boolean
     */
    public function setStarted(bool $bool)
    {
        if ($bool) {
            $this->lock->create();
        } else {
            $this->lock->delete();
        }
    }
}
