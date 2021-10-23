<?php

namespace app\modules\dvr\components;

use app\modules\dvr\components\exceptions\MysqlQueryException;
use mysqli;
use mysqli_result;

/**
 * Created by PhpStorm.
 * User: calc
 * Date: 28.03.14
 * Time: 14:23
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
    public static function getInstance(): ?Database
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
}