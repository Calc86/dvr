<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 26.06.14
 * Time: 18:48
 */

namespace app\modules\dvr\components\motion;

use app\modules\dvr\components\common\BashCommand2;
use app\modules\dvr\components\common\Log;
use app\modules\dvr\components\interfaces\ICam;
use app\modules\dvr\components\interfaces\ICommand;
use app\modules\dvr\components\SystemConfig;

/**
 * Class TimelapseCommand
 * @package system2
 */
class TimelapseCommand implements ICommand
{
    /**
     * @var ICam
     */
    private ICam $cam;
    private SystemConfig $config;

    private int $startTime;
    private int $endTime;

    /**
     * @param ICam $cam
     */
    function __construct(ICam $cam)
    {
        $this->config = new SystemConfig();
        $this->cam = $cam;
    }

    /**
     * @return string
     */
    public function getImagesPath(): string
    {
        $userID = $this->cam->getDVR()->getUser()->getID();
        $camID = $this->cam->getID();

        return $this->config->image . DIRECTORY_SEPARATOR . "$userID/$camID";
    }

    /**
     * @return string
     */
    public function getTmpPath(): string
    {
        return $this->config->getTmpfsPath($this->getImagesPath());
    }

    /**
     * @return string
     */
    public function getNfsPath(): string
    {
        return $this->config->getNfsPath($this->getImagesPath());
    }

    /**
     * @return string
     */
    public function getTimelapseName(): string
    {
        $camID = $this->cam->getID();
        return $camID . "_" . date("Ymd_Hi", $this->getStartTime()) . "00_timelapse.mp4";
    }

    /**
     * @return int timestamp
     */
    public function getStartTime(): int
    {
        return $this->startTime;
    }

    /**
     * @return int timestamp
     */
    public function getEndTime(): int
    {
        return $this->endTime;
    }

    /**
     * @return string
     */
    private function getListFilePath(): string
    {
        return $this->getTmpPath() . "/list.txt";
    }

    private function createListFile()
    {
        $createList = new BashCommand2("ls {$this->getTmpPath()}/snapshot*.jpg | sort > {$this->getListFilePath()}");
        Log::getInstance($this->cam->getID())->put($createList, __CLASS__);
        $createList->execute();

        if (file_exists($this->getListFilePath())) {
            $f = fopen($this->getListFilePath(), 'r');
            if ($f) {
                $firstFile = trim(fgets($f));
                if ($firstFile != '') {
                    $this->startTime = filectime($firstFile);
                    $this->endTime = filectime($this->getListFilePath());
                }
                fclose($f);
            }
        }
    }

    private function deleteListFile()
    {
        if (file_exists($this->getListFilePath()))
            unlink($this->getListFilePath());
    }

    private function createTimelapse()
    {
        $createTimelaps = new BashCommand2("cat {$this->getListFilePath()} | xargs cat | ffmpeg -f image2pipe -r 3 -vcodec mjpeg -i - -vcodec libx264 " . $this->getNfsPath() . '/' . $this->getTimelapseName());
        Log::getInstance($this->cam->getID())->put($createTimelaps, __CLASS__);
        $createTimelaps->execute();
    }

    private function deleteImages()
    {
        $deleteImages = new BashCommand2("cat {$this->getListFilePath()} | xargs rm");
        Log::getInstance($this->cam->getID())->put($deleteImages, __CLASS__);
        $deleteImages->execute();
    }

    /**
     * @return void
     */
    public function execute()
    {
        $this->createListFile();
        $this->createTimelapse();
        $this->deleteImages();
        $this->deleteListFile();
    }
}
