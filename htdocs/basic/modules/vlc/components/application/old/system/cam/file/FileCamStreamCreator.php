<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 09.04.14
 * Time: 14:35
 */

namespace system;

/**
 * Class FileCamStreamCreator
 * @package system
 */
class FileCamStreamCreator extends CamStreamCreator{

    /**
     * @param \UserID $dvr_id
     * @param \CamID $cam_id
     * @param $url
     */
    public function __construct(\UserID $dvr_id, \CamID $cam_id, $url)
    {
        parent::__construct($dvr_id, $cam_id);

        $csTemp = new CamStream();
        foreach(\CamPrefix::getPrefixes() as $pref){
            $csTemp->setDvrId($this->dvr_id);
            $csTemp->setCamId($this->cam_id);
            $csTemp->setPrefix(new \CamPrefix($pref));

            //TODO Парсить url как надо
            $path = str_replace("http://tv.local/","", $url);
            //http://tv.local/udp/224.0.90.228:1234
            $csTemp->setLiveProto('http');
            $csTemp->setIp('tv.local');
            $csTemp->setLivePort('80');
            $csTemp->setLivePath($path);
            $csTemp->setStreamPath('path');
            $this->streams[$pref] = clone $csTemp;
        }
    }
}
