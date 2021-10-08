<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 29.03.14
 * Time: 18:52
 */

namespace system;

/**
 * Class MysqlSqlCamStreamCreatorException
 * @package system
 */
class MysqlSqlCamStreamCreatorException extends \BBException{};

/**
 * Class MysqlCamStreamCreator
 * @package system
 */
class MysqlCamStreamCreator extends CamStreamCreator{
    /**
     * @param \UserID $dvr_id
     * @param \CamID $cam_id
     * @throws
     */
    function __construct(\UserID $dvr_id, \CamID $cam_id)
    {
        parent::__construct($dvr_id, $cam_id);

        $db = \Database::getInstance();
        $q = "select c.id as cam_id, ip, user, c.pass as pass, live, rec, mtn, live_auth, live_user, live_pass, live_proto, live_port, live_path, live_width, live_height, live_audio, stream_port, stream_path  from cams as c, cam_settings as cs where c.id=cs.cam_id and c.id=$this->cam_id";
        $r = $db->query($q);

        $n = $r->num_rows;
        if(!$n){
            // Такого быть не может, бросаем эксепшн, так как стримы создаются из камер, а выборка по камерам уже была.
            throw new MysqlSqlCamStreamCreatorException($q);
        }

        if($n > 1){
            //Такая же херня
            throw new MysqlSqlCamStreamCreatorException($q);
        }

        //$csTemp = $r->fetch_object("system\MysqlCamStream");
        $csTemp = $r->fetch_object("system\CamStream");
        foreach(\CamPrefix::getPrefixes() as $pref){
            /** @var MysqlCamStream $csTemp */
            $csTemp->setDvrId($this->dvr_id);
            $csTemp->setCamId($this->cam_id);
            $csTemp->setPrefix(new \CamPrefix($pref));
            $this->streams[$pref] = clone $csTemp;
        }
    }
}
