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
} 