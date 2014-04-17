<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 29.03.14
 * Time: 16:48
 */

namespace system;

/**
 * class DVR
 * Система управления камерами
 * @package system
 */
abstract class DVR extends Daemon implements IDVR {

    /**
     * @var ICamCreator
     */
    private $cams;

    /**
     * @param \UserID $uid
     */
    function __construct(\UserID $uid)
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
    public function getCams()
    {
        return $this->cams;
    }

    /**
     * @param \CamID $camID
     * Отдать камеру по id
     * @return ICam
     */
    public function getCam(\CamID $camID)
    {
        return $this->getCams()[$camID->get()];
    }

    public function live(){
        foreach($this->getCams() as $cam){
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
        //Кладем в файлик логов строку с датой
        file_put_contents($this->getLogFile(), date("[ Y-m-d H:i:s ]")."  update\n", FILE_APPEND);
        //апдейт нужно делать только если запущен процесс, иначе будет много маленьких записей в архиве.... ы
        if($this->isStarted()){
            foreach($this->getCams() as $cam){
                /** @var Cam $cam */
                $cam->update();
            }
        }
    }
} 