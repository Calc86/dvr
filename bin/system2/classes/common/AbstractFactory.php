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
     * @param int $id
     * @return IUser
     */
    abstract public function createUser($id);

    /**
     * @param IUser $user
     * @return IDVR
     */
    abstract public function createDvr(IUser $user);

    /**
     * @param IDVR $dvr
     * @param ICamSettings $cs
     * @return ICam
     */
    abstract public function createCam(IDVR $dvr, ICamSettings $cs);

    /**
     * @param ICam $cam
     * @return ICamStream
     */
    abstract public function createStream(ICam $cam);
} 