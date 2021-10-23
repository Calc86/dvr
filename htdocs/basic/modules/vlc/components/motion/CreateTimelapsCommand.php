<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 02.06.14
 * Time: 12:07
 */

namespace app\modules\vlc\components\motion;

use app\modules\vlc\components\common\Log;
use app\modules\vlc\components\ICommand;
use app\modules\vlc\types\BashCommand;

/**
 * Создает timelaps (картинки в видео)
 * Class CreateSnapshotCommand
 * @package system2
 * @deprecated
 */
class CreateTimelapsCommand implements ICommand
{
    private int $cid;
    private string $path;

    /**
     * @param int $cid cam id
     * @param string $path path to images
     */
    function __construct(int $cid, string $path)
    {
        $this->cid = $cid;
        $this->path = $path;
    }

    /**
     * @return string
     */
    public function getFileName(): string
    {
        return $this->cid . "_" . date("Ymd_His") . ".mp4";
    }

    /**
     * Полный путь к создаваемому файлу
     * @return string
     */
    public function getFilePath(): string
    {
        //up from CamID directory
        return realpath($this->getPath() . "/..") . "/" . $this->getFileName();
    }

    /**
     * Рабочий путь (где лежат картинки)
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @return void
     */
    public function execute()
    {
        $path = $this->getPath();

        $list = "$path/list.txt";

        $filename = $this->getFileName();

        $createList = new BashCommand("ls $path/snapshot*.jpg | sort > $list");
        $deleteList = new BashCommand("rm $list");

        $createTimelaps = new BashCommand("cat $list | xargs cat | ffmpeg -f image2pipe -r 3 -vcodec mjpeg -i - -vcodec libx264 " . $this->getFilePath());
        $deleteImages = new BashCommand("cat $list | xargs rm");

        Log::getInstance($this->cid)->put($createList, __CLASS__);
        Log::getInstance($this->cid)->put($createTimelaps, __CLASS__);
        Log::getInstance($this->cid)->put($deleteImages, __CLASS__);
        Log::getInstance($this->cid)->put($deleteList, __CLASS__);

        $createList->exec();
        $createTimelaps->exec();

        $deleteImages->exec();
        $deleteList->exec();
    }

}
