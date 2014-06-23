<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 12.05.14
 * Time: 14:33
 */

namespace system2;

/**
 * Общий интерфейс системы
 * Interface ISystem
 * @package system2
 */
interface ISystem extends IControlled{
    public function control();

    /**
     * @param $userID
     * @param $camID
     * @param $eventName
     * @param $timestamp
     * @param $csvParams
     * @return void
     */
    public function event($userID, $camID, $eventName, $timestamp, $csvParams);

    /**
     * @param Event $event
     * @return mixed
     */
    public function addEventHandler(Event $event);

    /**
     * Добавить комманду, которая будет вызвана в конце update
     * @param ICommand $command
     */
    public function addCommand(ICommand $command);

    /**
     * Добавить комманду, которая будет вызвана в конце update
     * @param ICommand $command
     */
    public function addPermanentCommand(ICommand $command);
} 