<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 28.03.14
 * Time: 14:23
 */

class Database {
    private $db;
    private static $instance = null;

    private function __construct(){
        $this->db = open_db(MYHOST, MYUSER, MYPASS, MYDB);
    }

    private function __clone()
    {
    }

    public static function getInstance(){
        if(self::$instance === null) self::$instance = new self();
        return self::$instance;
    }

    /**
     * @return mysqli
     */
    public function getDB(){
        return $this->db;
    }

} 