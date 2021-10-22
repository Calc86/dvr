<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 29.03.14
 * Time: 17:30
 */

namespace system;

use app\modules\vlc\components\Database;
use app\modules\vlc\components\exceptions\MysqlQueryException;
use app\modules\vlc\types\CamID;
use app\modules\vlc\types\UserID;

/**
 * Class MysqlCamCreator
 * Итератор для создания камер from Mysql
 * @package system
 */
class MysqlCamCreator extends CamCreator {

    private $count = 0;

    /**
     * @param UserID $dvr_id
     * @throws MysqlQueryException
     */
    function __construct(UserID $dvr_id)
    {
        parent::__construct($dvr_id);

        $db = Database::getInstance();

        $q = "select id, ip, live, rec, mtn from cams where user_id = $this->dvr_id";
        $r = $db->query($q);
        $this->count = $r->num_rows;

        while(($row = $r->fetch_object('system\MysqlCam',array($this->dvr_id))) != null){
            /** @var Cam $row */
            //залить параметры
            $camMotion = new MysqlCamMotion($this->dvr_id, new CamID($row->getID()), $row->getIp());
            $row->setCamMotion($camMotion);

            $this->cams[$row->getMysqlId()] = $row;
            $this->keys[] = $row->getMysqlId();
        }
    }
}
