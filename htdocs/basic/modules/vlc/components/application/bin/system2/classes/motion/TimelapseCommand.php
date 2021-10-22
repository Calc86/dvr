<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 26.06.14
 * Time: 18:48
 */

namespace system2;

/**
 * Class TimelapseCommand
 * @package system2
 */
class TimelapseCommand implements ICommand {
    /**
     * @var ICam
     */
    private $cam;

    private $startTime;
    private $endTime;

    /**
     * @param ICam $cam
     */
    function __construct(ICam $cam)
    {
        $this->cam = $cam;
    }

    /**
     * @return string
     */
    public function getImagesPath(){
        $userID = $this->cam->getDVR()->getUser()->getID();
        $camID = $this->cam->getID();

        return Path::IMAGE."/$userID/$camID";
    }

    /**
     * @return string
     */
    public function getTmpPath(){
        return Path::getTmpfsPath($this->getImagesPath());
    }

    /**
     * @return string
     */
    public function getNfsPath(){
        return Path::getNfsPath($this->getImagesPath());
    }

    /**
     * @return string
     */
    public function getTimelapseName(){
        $camID = $this->cam->getID();
        return $camID."_".date("Ymd_Hi", $this->getStartTime())."00_timelapse.mp4";
    }

    /**
     * @return int timestamp
     */
    public function getStartTime(){
        return $this->startTime;
    }

    /**
     * @return int timestamp
     */
    public function getEndTime(){
        return $this->endTime;
    }

    /**
     * @return string
     */
    private function getListFilePath(){
        return $this->getTmpPath()."/list.txt";
    }

    private function createListFile(){
        $createList = new \BashCommand("ls {$this->getTmpPath()}/snapshot*.jpg | sort > {$this->getListFilePath()}");
        Log::getInstance($this->cam->getID())->put($createList,__CLASS__);
        $createList->exec();

        if(file_exists($this->getListFilePath())){
            $f = fopen($this->getListFilePath(), 'r');
            if($f){
                $firstFile = trim(fgets($f));
                if($firstFile != ''){
                    $this->startTime = filectime($firstFile);
                    $this->endTime = filectime($this->getListFilePath());
                }
                fclose($f);
            }
        }
    }

    private function deleteListFile(){
        if(file_exists($this->getListFilePath()))
            unlink($this->getListFilePath());
    }

    private function createTimelapse(){
        $createTimelaps = new \BashCommand("cat {$this->getListFilePath()} | xargs cat | ffmpeg -f image2pipe -r 3 -vcodec mjpeg -i - -vcodec libx264 ".$this->getNfsPath().'/'.$this->getTimelapseName());
        Log::getInstance($this->cam->getID())->put($createTimelaps,__CLASS__);
        $createTimelaps->exec();
    }

    private function deleteImages(){
        $deleteImages = new \BashCommand("cat {$this->getListFilePath()} | xargs rm");
        Log::getInstance($this->cam->getID())->put($deleteImages,__CLASS__);
        $deleteImages->exec();
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
