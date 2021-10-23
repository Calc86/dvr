<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 29.03.14
 * Time: 16:48
 */

namespace system;

use app\modules\vlc\components\exceptions\PathException;
use app\modules\vlc\components\Log;
use app\modules\vlc\types\CamID;
use app\modules\vlc\types\UserID;

/**
 * Class DVR
 * Система управления камерами
 * @package system
 */
abstract class DVR extends Daemon implements IDVR
{

    /**
     * @var ICamCreator
     */
    private ICamCreator $cams;

    /**
     * @param UserID $uid
     * @throws PathException
     */
    function __construct(UserID $uid)
    {
        parent::__construct($uid, 'dvr');
    }

    /**
     * @param ICamCreator $cams
     */
    public function setCams(ICamCreator $cams)
    {
        $this->cams = $cams;
    }

    /**
     * @return ICamCreator
     */
    public function getCams(): ICamCreator
    {
        return $this->cams;
    }

    /**
     * @param CamID $camID
     * Отдать камеру по id
     * @return ICam
     */
    public function getCam(CamID $camID): ?ICam
    {
        return $this->getCams()[$camID->get()];
    }

    public function live()
    {
        foreach ($this->getCams() as $cam) {
            /** @var Cam $cam */
            $cam->live();
        }
    }

    /**
     * time routine
     * @return void
     */
    public function update()
    {
        Log::getInstance()->put(__FUNCTION__, __CLASS__);
        //Кладем в файл логов строку с датой
        file_put_contents($this->getLogFile(), date("[ Y-m-d H:i:s ]") . "  update\n", FILE_APPEND);
        // Update нужно делать только если запущен процесс, иначе будет много маленьких записей в архиве.... ы
        if ($this->isStarted()) {
            foreach ($this->getCams() as $cam) {
                /** @var Cam $cam */
                $cam->update();
            }
        }
    }

    /**
     * create timelaps file
     * @return mixed|null
     */
    public function timelaps()
    {
        return null;
        //do nothing
    }


} 