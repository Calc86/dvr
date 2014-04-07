<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 07.04.14
 * Time: 17:40
 */

namespace system;

/**
 * Class CamMotion
 * @package system
 * Класс для хранения настроек мошна для камеры
 */
class CamMotion {

    /**
     * @var  \CamID
     */
    private $id;
    /**
     * @var array key=>value
     */
    private $config;

    /**
     * @param \CamID $id
     */
    function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * @return \CamID
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param array $config
     */
    public function setConfig($config)
    {
        $this->config = $config;
    }

    /**
     * @return array
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Добавить или изменить строчку конфига
     * @param String $name
     * @param String $value
     */
    public function addConfig($name, $value){
        $this->config[$name] = $value;
    }
} 