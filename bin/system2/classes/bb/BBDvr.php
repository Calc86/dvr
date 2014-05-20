<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 14.05.14
 * Time: 20:31
 */
namespace system2;

/**
 * Class BBDvr
 * @package system2
 */
class BBDvr extends DVR {
    public function create()
    {
        parent::create();

        // создаем камеры перед запуском демона, так как в демон нам нужно засунуть камеры.
        $this->createCams();

        $cams_id = array();
        foreach($this->cams as $cam){
            /** @var IUnique $cam */
            $cams_id[] = $cam->getID();
        }

        $this->daemons[] = new Vlc($this);
        $this->daemons[] = new Motion($this, $cams_id);
    }

    protected function createCams(){
        $db = \Database::getInstance();
        $q = mysql::getQuery(mysql::CAM_SETTINGS, array('{dvr_id}' => $this->getID()));
        $r = $db->query($q);

        while(($row = $r->fetch_object('system2\BBCamSettings')) != null){
            /** @var BBCamSettings $row */

            $this->cams[] = new BBCam($this, $row);
        }
    }
}
