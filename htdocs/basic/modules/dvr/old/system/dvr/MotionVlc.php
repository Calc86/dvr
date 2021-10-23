<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 09.04.14
 * Time: 14:58
 */

namespace system;

use app\modules\dvr\components\exceptions\PathException;
use app\modules\dvr\components\Log;
use app\modules\dvr\types\BashCommand;
use app\modules\dvr\types\UserID;

/**
 * Class MotionVlc
 * vlc with motion
 * @package system
 * @deprecated
 */
class MotionVlc extends Vlc
{
    /**
     * @var Motion
     */
    private Motion $motion;

    /**
     * @param UserID $uid
     * @param CamCreator $camCreator
     * @throws PathException
     */
    function __construct(UserID $uid, CamCreator $camCreator)
    {
        parent::__construct($uid, $camCreator);

        $this->motion = new Motion($this->getUid());
    }

    public function start()
    {
        Log::getInstance()->put(__FUNCTION__, __CLASS__);
        parent::start();

        foreach ($this->getCams() as $cam) {
            /** @var Cam $cam */
            $camMotion = $cam->getCamMotion();
            if ($camMotion != null) $this->motion->addThread($camMotion);
        }

        $this->motion->start();
    }

    public function timelaps()
    {
        Log::getInstance()->setUserID($this->getUid());
        Log::getInstance()->put(__FUNCTION__, __CLASS__);
        foreach ($this->getCams() as $cam) {
            /** @var Cam $cam */
            Log::getInstance()->put("CID: " . $cam->getID(), __CLASS__);
            $camMotion = $cam->getCamMotion();
            if ($camMotion != null) {
                Log::getInstance()->put("CID: " . $cam->getID() . " do", __CLASS__);
                $path = $camMotion->getTargetDir();


                $list = "$path/list.txt";
                $filename = $cam->getID() . "_" . date("Y-m-d_H:i:s") . ".mp4";

                $createList = new BashCommand("ls $path/snapshot*.jpg | sort > $list");
                $deleteList = new BashCommand("rm $list");
                $createTimelaps = new BashCommand("cat $list | xargs cat | ffmpeg -f image2pipe -r 3 -vcodec mjpeg -i - -vcodec libx264 $path/../$filename");
                $deleteImages = new BashCommand("cat $list | xargs rm");

                $createList->exec();
                $createTimelaps->exec();

            }
        }
    }

    public function stop()
    {
        Log::getInstance()->put(__FUNCTION__, __CLASS__);
        //$this->motion->stop();
        $this->motion->shutdown();

        parent::stop();
    }
} 