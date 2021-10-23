<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 29.04.14
 * Time: 17:21
 */

namespace app\modules\vlc\components\common;


use app\modules\vlc\components\types\BashCommand;

/**
 * Class Lock
 * @package system2
 */
class Lock
{
    private string $path;
    private string $fName;

    const EXTENSION = '.lock';

    /**
     * @param string $fName filename/function name/ __FUNCTION__
     */
    function __construct(string $fName)
    {

        $this->fName = $fName . Lock::EXTENSION;

        Log::getInstance()->put(__FUNCTION__, __CLASS__ . "-" . $this->fName);

        $this->path = Path::getTmpfsPath(Path::LOCKS) . "/" . $this->fName;
    }

    /**
     * @return bool
     */
    public function create(): bool
    {
        Log::getInstance()->put(__FUNCTION__, __CLASS__ . "-" . $this->fName);
        if ($this->isLock()) {
            Log::getInstance()->put($this->fName, $this);
            return false;
        }
        $f = fopen($this->path, "w+");
        fclose($f);
        return true;
    }

    /**
     *
     */
    public function delete()
    {
        Log::getInstance()->put(__FUNCTION__, __CLASS__ . "-" . $this->fName);
        if ($this->isLock())
            unlink($this->path);
    }

    /**
     *
     */
    public static function resetAll()
    {
        Log::getInstance()->put(__FUNCTION__, __CLASS__);
        $reset = new BashCommand("ls " . Path::getTmpfsPath(Path::LOCKS) . "/*" . Lock::EXTENSION . " | xargs rm");
        $reset->exec();
    }

    /**
     * @param $maxTimeout
     * @return bool seconds
     */
    public function wait($maxTimeout): bool
    {
        Log::getInstance()->put(__FUNCTION__, __CLASS__ . "-" . $this->fName);
        $wait = 0;
        while (1) {
            if (file_exists($this->path)) {
                sleep(1);
                $wait++;
            } else
                return true;
            if ($wait > $maxTimeout)
                return false;
        }
        return false;
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @return bool
     */
    public function isLock(): bool
    {
        return file_exists($this->getPath());
    }
}
