<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 05.06.14
 * Time: 14:46
 */

namespace system2;

use app\modules\vlc\components\ICam;
use app\modules\vlc\components\ICamSettings;
use app\modules\vlc\components\ICamStream;
use app\modules\vlc\components\ICommand;
use app\modules\vlc\components\IDVR;
use app\modules\vlc\components\ISystem;
use app\modules\vlc\components\IUser;

/**
 * Основной класс для создания других классов
 * Class AbstractFactory
 * @package system2
 */
abstract class AbstractFactory
{
    private static ?AbstractFactory $instance = null;

    /**
     * @var array
     */
    private array $commands;

    /**
     * @return AbstractFactory
     */
    public static function getInstance(): ?AbstractFactory
    {
        if (self::$instance == null) self::$instance = new static;
        return self::$instance;
    }

    /**
     * permanentCommand
     * @param ICommand $command
     */
    protected function addPermanentCommand(ICommand $command)
    {
        $this->commands[] = $command;
    }

    /**
     * @param ISystem $system
     */
    protected function addCommands(ISystem $system)
    {
        foreach ($this->commands as $command)
            $system->addPermanentCommand($command);
    }

    //todo buildSystem method

    /**
     * @return ISystem
     */
    public function createSystem(): ISystem
    {
        return System::getInstance();
    }

    /**
     * @return array of Users
     */
    public function createUsers(): array
    {
        return array(AbstractFactory::getInstance()->createUser(1));
    }

    /**
     * @param int $id
     * @return User
     */
    public function createUser(int $id): User
    {
        return new User($id);
    }

    /**
     * @param IUser $user
     * @return IDVR
     */
    public function createDvr(IUser $user)
    {
        $dvr = new Dvr($user);

        $cams = $this->createCams($dvr);    //new+add
        foreach ($cams as $cam) {
            /** @var $cam Cam */
            $dvr->addCam($cam);
        }

        $daemons = $this->createDaemons($dvr);

        foreach ($daemons as $daemon) {
            /** @var $daemon Daemon */
            $dvr->addDaemon($daemon);
        }

        return $dvr;
    }

    /**
     * @param DVR $dvr
     * @return array of Cams
     */
    abstract protected function createCams(DVR $dvr): array;

    /**
     * @param DVR $dvr
     * @return array of Daemons
     */
    abstract protected function createDaemons(DVR $dvr): array;

    /**
     * @param IDVR $dvr
     * @param ICamSettings $cs
     * @return ICam
     */
    public function createCam(IDVR $dvr, ICamSettings $cs)
    {
        return new Cam($dvr, $cs);
    }

    /**
     * @param $from
     * @param $to
     * @return MoveToNfsCommand
     */
    public function createMoveToNfsCommand($from, $to): MoveToNfsCommand
    {
        return new MoveToNfsCommand($from, $to);
    }

    /**
     * @param ICam $cam
     * @return ICamStream
     */
    abstract public function createStream(ICam $cam): ICamStream;
} 