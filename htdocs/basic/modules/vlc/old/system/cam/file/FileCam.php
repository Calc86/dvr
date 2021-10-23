<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 09.04.14
 * Time: 14:31
 */

namespace system;

/**
 * Class FileCam
 * @package system
 * @deprecated
 */
class FileCam extends Cam {

    /**
     * @param \UserID $dvr_id
     * @param \CamID $camID
     * @param $ip
     * @param $live
     * @param $rec
     * @param $mtn
     * @param $url
     */
    public function __construct(\UserID $dvr_id, \CamID $camID, $ip, $live, $rec, $mtn, $url)
    {
        $this->setId($camID->get());
        $this->setIp($ip);
        $this->setLive($live);
        $this->setRec($rec);
        $this->setMtn($mtn);

        parent::__construct($dvr_id);

        $this->setCamStreamCreator(
            new FileCamStreamCreator($dvr_id, new \CamID($this->getID()), $url)
        );
    }
}
