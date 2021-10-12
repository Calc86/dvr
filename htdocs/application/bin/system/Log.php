<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 17.04.14
 * Time: 12:52
 */

namespace system;

/**
 * Class Log
 * @package system
 */
class Log {
    const ERROR = "ERROR";
    const NOTICE = "NOTICE";
    const WARNING = "WARNING";

    private $userID;
    private $logPath;
    private static $instance = null;

    /**
     * @param \UserID $userID
     * @return null|Log
     */
    public static function getInstance(\UserID $userID = null){
        if(self::$instance == null){
            if($userID != null)
                self::$instance = new static($userID);
            else
                self::$instance = new static();
        }
        if($userID != null) self::$instance->setUserID($userID);
        return self::$instance;
    }

    /**
     *
     */
    function __construct(\UserID $userID = null)
    {
        if($userID != null) $this->setUserID($userID);
        else $this->userID = 0;

        $this->setLogPath(LOG."/system.log");
    }

    /**
     * @param \UserID $userID
     */
    public function setUserID($userID)
    {
        $this->userID = $userID;
    }

    /**
     * @param string $logPath
     */
    protected  function setLogPath($logPath)
    {
        $this->logPath = $logPath;
    }

    /**
     * @return string
     */
    protected  function getLogPath()
    {
        return $this->logPath;
    }

    /**
     * @param $string
     * @param string $module
     * @return string
     */
    public function put($string, $module = "log", $target = "NOTICE"){
        $data = date("[ Y-m-d H:i:s ]")." UID:{$this->userID} {$target} $module ".trim($string)."\n";
        file_put_contents($this->getLogPath(), $data, FILE_APPEND);
        return $data;
    }
}
