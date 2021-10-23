<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 09.04.14
 * Time: 14:21
 */

namespace system;

/**
 * Class MysqlCam
 * @package system
 * @deprecated
 */
class MysqlCam extends Cam{
    /**
     * @param \UserID $dvr_id
     */
    function __construct(\UserID $dvr_id)
    {
        parent::__construct($dvr_id);
        $this->setCamStreamCreator( new MysqlCamStreamCreator($dvr_id, new \CamID($this->getID())));
    }
}
