<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 17.04.14
 * Time: 12:52
 */

namespace system2;

/**
 * Class Log
 * @package system2
 */
class Log {
    const ERROR = "ERROR";
    const NOTICE = "NOTICE";
    const WARNING = "WARNING";

    private $userID;
    private $logPath;
    private static $instance = null;

    /**
     * @param $userID
     * @return null|Log
     */
    public static function getInstance($userID = 0){
        if(self::$instance == null){
            if($userID != 0)
                self::$instance = new static($userID);
            else
                self::$instance = new static();
        }
        self::$instance->setUserID($userID);
        return self::$instance;
    }

    /**
     *
     */
    function __construct($userID = null)
    {
        if($userID != null) $this->setUserID($userID);
        else $this->userID = 0;

        $this->setLogPath(Path::getLocalPath(Path::LOG)."/system.log");
    }

    /**
     * @param $userID
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
     * @param string|object $module
     * @param string $target
     * @return string
     */
    public function put($string, $module, $target = "NOTICE"){
        if(is_object($module)){
            $module = get_class($module);
        }
        $data = date("[ Y-m-d H:i:s ]")." UID:{$this->userID} {$target} $module ".trim($string)."\n";
        file_put_contents($this->getLogPath(), $data, FILE_APPEND);
        return $data;
    }
}
