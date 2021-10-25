<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 05.06.14
 * Time: 14:46
 */

namespace app\modules\dvr\components\common;

use app\modules\dvr\components\interfaces\ICam;
use app\modules\dvr\components\interfaces\ICamSettings;
use app\modules\dvr\components\interfaces\ICamStream;
use app\modules\dvr\components\interfaces\ICommand;
use app\modules\dvr\components\interfaces\IDVR;
use app\modules\dvr\components\interfaces\ISystem;
use app\modules\dvr\components\interfaces\IUser;
use app\modules\dvr\components\SystemConfig;

/**
 * Основной класс для создания других классов
 * Class AbstractFactory
 * @package system2
 */
abstract class AbstractFactory
{
    protected SystemConfig $config;
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
        if (self::$instance == null) {
            self::$instance = new static;
            self::$instance->config = new SystemConfig();   // todo 20211025
        }

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