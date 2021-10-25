<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 20.06.14
 * Time: 15:10
 */

namespace app\modules\dvr\components\common;

use app\modules\dvr\components\SystemConfig;

/**
 * Class EventHandler
 * @package system2
 */
abstract class Event
{
    private string $name;
    protected SystemConfig $config;

    /**
     *
     */
    public function __construct($name)
    {
        $this->config = new SystemConfig(); //todo 20211025
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param $user
     * @param $cam
     * @param $timestamp
     * @param array $params
     */
    abstract public function handle($user, $cam, $timestamp, array $params);
}
