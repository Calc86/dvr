<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 02.06.14
 * Time: 12:07
 */

namespace system2;

/**
 * Создает таймлапсы
 * Class CreateSnapshotCommand
 * @package system2
 */
class CreateTimelapsCommand implements ICommand {
    private $cid;
    private $path;

    /**
     * @param int $cid cam id
     * @param string $path path to images
     */
    function __construct($cid, $path)
    {
        $this->cid = $cid;
        $this->path = $path;
    }


    /**
     * @return void
     */
    public function execute()
    {
        $path = $this->path;

        $list = "$path/list.txt";

        $filename = $this->cid."_".date("Ymd_His").".mp4";

        $createList = new \BashCommand("ls $path/snapshot*.jpg | sort > $list");
        $deleteList = new \BashCommand("rm $list");

        $createTimelaps = new \BashCommand("cat $list | xargs cat | ffmpeg -f image2pipe -r 3 -vcodec mjpeg -i - -vcodec libx264 $path/../$filename");
        $deleteImages = new \BashCommand("cat $list | xargs rm");

        Log::getInstance($this->cid)->put($createList,__CLASS__);
        Log::getInstance($this->cid)->put($createTimelaps,__CLASS__);
        Log::getInstance($this->cid)->put($deleteImages,__CLASS__);
        Log::getInstance($this->cid)->put($deleteList,__CLASS__);

        $createList->exec();
        $createTimelaps->exec();

        $deleteImages->exec();
        $deleteList->exec();
    }

} 