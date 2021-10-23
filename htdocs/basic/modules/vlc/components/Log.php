<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 17.04.14
 * Time: 12:52
 */

namespace app\modules\vlc\components;

use app\modules\vlc\components\types\UserID;

/**
 * Class Log
 * @package system
 * @deprecated Use common\Log
 */
class Log
{
    const ERROR = "ERROR";
    const NOTICE = "NOTICE";
    const WARNING = "WARNING";

    private $userID;
    private $logPath;
    private static ?Log $instance = null;

    /**
     * @param UserID|null $userID
     * @return null|Log
     */
    public static function getInstance(?UserID $userID = null): ?Log
    {
        if (self::$instance == null) {
            if ($userID != null)
                self::$instance = new static($userID);
            else
                self::$instance = new static();
        }
        if ($userID != null) self::$instance->setUserID($userID);
        return self::$instance;
    }

    /**
     *
     */
    function __construct(UserID $userID = null)
    {
        if ($userID != null) $this->setUserID($userID);
        else $this->userID = 0;

        $this->setLogPath(LOG . "/system.log");
    }

    /**
     * @param UserID $userID
     */
    public function setUserID(UserID $userID)
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
     * @param string $module
     * @param string $target
     * @return string
     */
    public function put($string, string $module = "log", string $target = "NOTICE"): string
    {
        $data = date("[ Y-m-d H:i:s ]") . " UID:$this->userID $target $module " . trim($string) . "\n";
        file_put_contents($this->getLogPath(), $data, FILE_APPEND);
        return $data;
    }
}
