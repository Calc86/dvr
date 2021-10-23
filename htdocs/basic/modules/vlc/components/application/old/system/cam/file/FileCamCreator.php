<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 09.04.14
 * Time: 14:04
 */

namespace system;

/**
 * Class FileCamCreator
 * Итератор для создания камер из файла
 * @package system
 * @deprecated
 */
class FileCamCreator extends  CamCreator {

    /**
     * @param \UserID $dvr_id
     * @param String $settings построчно адреса камер
     */
    public function __construct(\UserID $dvr_id, $settings)
    {
        parent::__construct($dvr_id);

        $lines = explode("\n",$settings);
        while(($row = each($lines)) != FALSE){
            list($k, $url) = $row;
            $camId = new \CamID($k + 1);
            //TODO Парсить ip для камер
            $cam = new FileCam($this->dvr_id, $camId, 'tv.local', 1, 1, 0, $url);
            //$q = "select id, ip, live, rec, mtn from cams where user_id = $this->dvr_id";
            /*$cam->setIp('tv.local');
            $cam->setLive(1);
            $cam->setRec(1);
            $cam->setMtn(0);*/

            $this->cams[$k + 1] = $cam;
            $this->keys[] = $k + 1;
        }
    }
}
