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
class BBException extends Exception{

    /**
     * Измененный конструктор, чтобы класть информацию в БД
     */
    public function __construct()
    {
        parent::__construct();
        $this->putLog();
    }

    /**
     * Кладем информацию в БД
     */
    public function putLog(){
        $db = Database::getInstance()->getDB();
        $q = "insert into exceptions values(0, now(), '{$this->getCode()}', '{$this->getFile()}', '{$this->getLine()}', '{$this->getMessage()}', '{$this->getTraceAsString()}')";
        $db->query($q);
    }
}

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