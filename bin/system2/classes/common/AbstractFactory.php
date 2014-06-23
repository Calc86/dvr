<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 05.06.14
 * Time: 14:46
 */

namespace system2;

/**
 * Основной класс для создания других классов
 * Class AbstractFactory
 * @package system2
 */
abstract class AbstractFactory {
    private static $instance = null;

    /**
     * @return AbstractFactory
     */
    public static function getInstance(){
        if(self::$instance == null) self::$instance = new static;
        return self::$instance;
    }

    /**
     * @return ISystem
     */
    public function createSystem(){
        return System::getInstance();
    }

    /**
     * @return array of Users
     */
    public function createUsers(){
        return array(AbstractFactory::getInstance()->createUser(1));
    }

    /**
     * @param int $id
     * @return IUser
     */
    public function createUser($id)
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
        foreach($cams as $cam){
            /** @var $cam Cam */
            $dvr->addCam($cam);
        }

        $daemons = $this->createDaemons($dvr);

        foreach($daemons as $daemon){
            /** @var $daemon Daemon */
            $dvr->addDaemon($daemon);
        }

        return $dvr;
    }

    /**
     * @param DVR $dvr
     * @return array of Cams
     */
    abstract protected function createCams(DVR $dvr);

    /**
     * @param DVR $dvr
     * @return array of Daemons
     */
    abstract protected function createDaemons(DVR $dvr);

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
    public function createMoveToNfsCommand($from, $to){
        return new MoveToNfsCommand($from, $to);
    }

    /**
     * @param ICam $cam
     * @return ICamStream
     */
    abstract public function createStream(ICam $cam);
} 