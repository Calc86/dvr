<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 16.06.14
 * Time: 10:56
 */

namespace system2;

/**
 * Class BBFactory
 * @package system2
 */
class BBFactory extends AbstractFactory {
    /**
     * @param DVR $dvr
     * @return array of Daemons
     */
    protected function createDaemons(DVR $dvr)
    {
        $vlc = new Vlc($dvr);
        $motion = new Motion($dvr, $dvr->getCamIDs());

        return array($vlc, $motion);
    }

    /**
     * @return array
     */
    public  function createUsers()
    {
        $users = array();
        $db = \Database::getInstance();
        $q = "select id from users where banned=0";
        $r = $db->query($q);
        while(($row = $r->fetch_row())){
            try{
                $users[] = AbstractFactory::getInstance()->createUser($row[0]);
            }
            catch(\Exception $e){
                Log::getInstance()->put($e->getCode().' '.$e->getMessage()."\n".$e->getTraceAsString()."\n", __CLASS__, Log::ERROR);
            }
        }

        return $users;
    }

    /**
     * @param DVR $dvr
     * @return array
     */
    protected function createCams(DVR $dvr){
        $db = \Database::getInstance();
        $q = mysql::getQuery(mysql::CAM_SETTINGS, array('{dvr_id}' => $dvr->getID()));
        $r = $db->query($q);

        $cams = array();
        while(($row = $r->fetch_object('system2\BBCamSettings')) != null){
            /** @var BBCamSettings $row */

            //$dvr->addCam(new BBCam($this, $row));
            $cams[] = $this->createCam($dvr, $row);
        }
        return $cams;
    }

    /**
     * @param ICam $cam
     * @return ICamStream
     */
    public function createStream(ICam $cam)
    {
        $stream = new Streams($cam);

        $cs = $cam->getSettings();
        /** @var $cs BBCamSettings */
        if($cs->live){
            $motion = new MotionStream($cam, $cs);
            $stream->addStream($motion);

            $live = new BBLiveStream($cam);
            $stream->addStream($live);

            $stream->addStream(new HLSVlcStream($cam, $live));
            //$this->streams[] = new FlvVlcReStream($this, $live);

            //nginx rtmp stream
            //$this->streams[] = new RtmpVlcReStream($this, $live);

            if($cs->rec) $stream->addStream(new BBRecStream($cam, $live));

            //motion flv stream
            $stream->addStream(
                new UrlFlvVlcStream($cam, "http://localhost:".(MOTION_STREAM_PORT + $cam->getID()))
            );
        }

        return $stream;
    }

} 