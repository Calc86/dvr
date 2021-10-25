<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 17.04.14
 * Time: 12:52
 */

namespace app\modules\dvr\components\common;

use app\modules\dvr\components\SystemConfig;

/**
 * Class Log
 * @package system2
 */
class Log
{
    const ERROR = "ERROR";
    const NOTICE = "NOTICE";
    const WARNING = "WARNING";

    private int $userID;
    private string $logPath;
    private static ?Log $instance = null;
    private SystemConfig $config;

    /**
     * @param int $userID
     * @return null|Log
     */
    public static function getInstance(int $userID = 0): ?Log
    {
        if (self::$instance == null) {
            if ($userID != 0)
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
        if ($userID != null) $this->setUserID($userID);
        else $this->userID = 0;
        $this->config = new SystemConfig();

        $this->setLogPath(
            $this->config->getLocalPath($this->config->log)
            . DIRECTORY_SEPARATOR . "system.log");
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
    protected function setLogPath(string $logPath)
    {
        $this->logPath = $logPath;
    }

    /**
     * @return string
     */
    protected function getLogPath(): string
    {
        return $this->logPath;
    }

    /**
     * @param $string
     * @param string|object $module
     * @param string $target
     * @return string
     */
    public function put($string, $module, string $target = "NOTICE"): string
    {
        if (is_object($module)) {
            $module = get_class($module);
        }
        $data = date("[ Y-m-d H:i:s ]") . " UID:$this->userID $target $module " . trim($string) . "\n";
        file_put_contents($this->getLogPath(), $data, FILE_APPEND);
        return $data;
    }
}
