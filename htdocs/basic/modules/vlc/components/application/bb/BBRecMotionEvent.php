<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 24.06.14
 * Time: 19:17
 */

namespace system2;

use app\modules\vlc\components\common\Cam;
use app\modules\vlc\components\common\Event;
use app\modules\vlc\components\common\Lock;
use app\modules\vlc\components\common\Path;
use app\modules\vlc\components\common\User;
use app\modules\vlc\components\ICam;

/**
 * Class BBRecMotionEvent
 * @package system2
 */
class BBRecMotionEvent extends Event
{
    /**
     * @param User $user
     * @param Cam $cam
     * @param $timestamp
     * @param array $params
     */
    public function handle($user, $cam, $timestamp, array $params)
    {
        $stream = $cam->getStream()->get(Path::MOTION);
        if ($stream != null) {
            if ($this->getName() == Motion::EVENT_MOTION_START) {
                $this->setMotion(true, $cam);
                /** @var BBCamSettings $cs */
                $cs = $cam->getSettings();

                $stream->setEnabled($cs->live && $cs->mtn);
                $stream->start();
            }

            if ($this->getName() == Motion::EVENT_MOTION_STOP) {
                $this->setMotion(false, $cam);
                $stream->stop();
            }
        }
    }

    /**
     * @param ICam $cam
     * @return Lock
     */
    private static function createLock(ICam $cam)
    {
        return new Lock('motionDetected_' . $cam->getID());
    }

    /**
     * @param $motion
     * @param ICam $cam
     */
    private function setMotion($motion, ICam $cam)
    {
        //true - создать файл синхронизации
        //false - удалить файл синхронизации
        //возможно нужно будет перейти на реализацию от MySql или подобной фигни, которая синхронизируется
        $lock = self::createLock($cam);

        if ($motion) $lock->create();
        else $lock->delete();
    }

    /**
     * @param ICam $cam
     * @return bool
     */
    public static function isMotion(ICam $cam): bool
    {
        $lock = self::createLock($cam);
        return $lock->isLock();
    }
}
