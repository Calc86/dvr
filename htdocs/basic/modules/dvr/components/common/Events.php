<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 20.06.14
 * Time: 15:15
 */

namespace app\modules\dvr\components\common;

/**
 * Class Events
 * @package system2
 */
final class Events extends Event{

    private array $events = [];

    /**
     * @param $name
     */
    public function __construct($name)
    {
        parent::__construct($name);
    }

    /**
     * @param Event $event
     */
    public function add(Event $event){
        if($event->getName() == $this->getName())
            $this->events[] = $event;
    }

    /**
     * @param $user
     * @param $cam
     * @param $timestamp
     * @param array $params
     */
    public function handle($user, $cam, $timestamp, array $params)
    {
        foreach($this->events as $event){
            /** @var $event Event*/
            $event->handle($user, $cam, $timestamp, $params);
        }
    }
}