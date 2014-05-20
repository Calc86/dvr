<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 14.05.14
 * Time: 14:08
 */

namespace system2;

/**
 * can write to log
 * Interface ILog
 * @package system2
 */
interface ILog {
    /**
     * write message to log
     * @param $message
     * @return void
     */
    public function log($message);
}
