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
class BBException extends Exception{}

/**
 * Class MysqlException
 */
class MysqlException extends BBException{}

/**
 * Class MysqlQueryException
 */
class MysqlQueryException extends MysqlException{}