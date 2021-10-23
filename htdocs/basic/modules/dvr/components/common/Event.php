<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 20.06.14
 * Time: 15:10
 */

namespace app\modules\dvr\components\common;

/**
 * Class EventHandler
 * @package system2
 */
abstract class Event
{
    private string $name;

    /**
     *
     */
    public function __construct($name)
    {
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
