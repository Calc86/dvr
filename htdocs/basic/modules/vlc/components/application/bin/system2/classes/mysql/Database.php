<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 28.03.14
 * Time: 14:23
 */

namespace system2;

use Exception;
use mysqli;
use mysqli_result;

/**
 * Class MysqlException
 * @package system2
 */
class MysqlException extends Exception
{
    public function putLog()
    {
    }
}

/**
 * Class MysqlQueryException
 */
class MysqlQueryException extends MysqlException
{
}

/**
 * Class Database
 * @package system2
 * mysqli singleton
 */
class Database
{
    /**
     * @var mysqli
     */
    private mysqli $db;
    private static ?Database $instance = null;

    /**
     *
     */
    private function __construct()
    {
        $this->db = open_db(MYHOST, MYUSER, MYPASS, MYDB);
    }

    private function __clone()
    {
    }

    /**
     * @return Database
     */
    public static function getInstance(): Database
    {
        if (self::$instance === null) self::$instance = new self();
        return self::$instance;
    }

    /**
     * @return mysqli
     */
    public function getDB(): mysqli
    {
        return $this->db;
    }

    /**
     * @param $query
     * @return mysqli_result
     * @throws MysqlQueryException
     */
    public function query($query): mysqli_result
    {
        $r = $this->db->query($query);
        if (!$r) throw new MysqlQueryException($query . "; " . $this->db->error);
        return $r;
    }

    /**
     * @param $message
     * @return MysqlQueryException
     */
    public static function createException($message): MysqlQueryException
    {
        return new MysqlQueryException($message);
    }
}
