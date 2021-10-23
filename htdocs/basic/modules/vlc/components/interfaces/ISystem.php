<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 12.05.14
 * Time: 14:33
 */

namespace app\modules\vlc\components\interfaces;

use app\modules\vlc\components\common\Event;
use app\modules\vlc\components\common\Lock;

/**
 * Общий интерфейс системы
 * Interface ISystem
 * @package system2
 */
interface ISystem extends IControlled
{
    /**
     * @return mixed
     */
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
     * Добавить команду, которая будет вызвана в конце update
     * @param ICommand $command
     */
    public function addCommand(ICommand $command);

    /**
     * Добавить команду, которая будет вызвана в конце update
     * @param ICommand $command
     */
    public function addPermanentCommand(ICommand $command);

    /**
     * @return Lock
     */
    public function getLock(): Lock;

    /**
     * @return mixed
     */
    public function clear();
} 