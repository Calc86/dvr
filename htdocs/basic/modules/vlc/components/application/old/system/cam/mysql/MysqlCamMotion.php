<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 07.04.14
 * Time: 21:56
 */

namespace system;

use app\modules\vlc\components\Database;
use app\modules\vlc\types\CamID;
use app\modules\vlc\types\UserID;

/**
 * Class MysqlCamMotion
 * @package system
 * @deprecated
 */
class MysqlCamMotion extends CamMotion {
    /**
     * @param UserID $dvrID
     * @param CamID $camID
     * @param $ip
     * @throws \app\modules\vlc\components\exceptions\MysqlQueryException
     */
    function __construct(UserID $dvrID, CamID $camID, $ip)
    {
        parent::__construct($dvrID, $camID);

        $db = Database::getInstance();

        $q = "select stop_user, stop_pass, stop_proto, stop_port, stop_path from cam_settings where cam_id=$camID";
        $r = $db->query($q);
        //Ошибки быть не должно, так как по дереву выше делаем выборку на id
        $s = $r->fetch_assoc();

        $motionUrl = $s['stop_proto']."://".$ip.":".$s['stop_port']."/".$s['stop_path'];
        $this->addConfig('netcam_url',$motionUrl);

        $proxyUrl = "http://localhost/out/snap.php?cid=$camID";
        $this->addConfig('netcam_proxy',$proxyUrl);

        if($s['stop_user'] != ''){
            $userPass = $s['stop_user'].":".$s['stop_pass'];
            $this->addConfig('netcam_userpass', $userPass);
        }

        $q = "select name,value from motion where cam_id = {$this->getCamID()}";
        $r = $db->query($q);

        $config = array();
        while(($row = $r->fetch_row()) != null){
            $config[$row[0]] = $row[1];
        }
        $this->setConfig($config);
    }
}
