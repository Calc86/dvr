<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 27.03.14
 * Time: 15:11
 */

/**
 * Class BBException
 */


class PathException extends BBException{}

/**
 * Class MysqlException
 */
class MysqlException extends BBException{
    public function putLog() {}
}

/**
 * Class MysqlQueryException
 */
class MysqlQueryException extends MysqlException{}