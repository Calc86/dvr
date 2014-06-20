<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 20.06.14
 * Time: 15:10
 */

namespace system2;

/**
 * Class EventHandler
 * @package system2
 */
class Event {

    private $name;

    /**
     *
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    /**
     * @param $user
     * @param $cam
     * @param $timestamp
     * @param array $params
     */
    public function handle($user, $cam, $timestamp, array $params){

    }
}
