<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 28.03.14
 * Time: 14:04
 */

class vlcRpc extends PHPUnit_Framework_TestCase {
    const CID = 8;

    /**
     * @return vlc
     */
    public function getVlc(){
        return new vlc(new UserID(1));
    }

    public function getVlcRpc(){
        return new vlc_rpc(1);
    }

    public function testStart(){
        $this->getVlcRpc()->start();
    }

    public function testRestart(){
        $this->getVlcRpc()->restart();
    }

    public function testStatus(){
        $this->getVlcRpc()->status();
    }

    public function testCamPlay(){
        $this->getVlcRpc()->cam_play(self::CID, CamPrefix::LIVE);
        $this->getVlcRpc()->cam_play(self::CID, CamPrefix::RECORD);
        $this->getVlcRpc()->cam_play(self::CID, CamPrefix::MOTION);
    }

    public function testCamStop(){
        $this->getVlcRpc()->cam_stop(self::CID,CamPrefix::LIVE);
        $this->getVlcRpc()->cam_stop(self::CID,CamPrefix::RECORD);
        $this->getVlcRpc()->cam_stop(self::CID,CamPrefix::MOTION);
    }

    public function testPlayCam(){
        $this->getVlcRpc()->play_cam(self::CID, CamPrefix::LIVE);
        $this->getVlcRpc()->play_cam(self::CID, CamPrefix::RECORD);
        $this->getVlcRpc()->play_cam(self::CID, CamPrefix::MOTION);
    }

    public function testStopCam(){
        $this->getVlcRpc()->stop_cam(self::CID, CamPrefix::LIVE);
        $this->getVlcRpc()->stop_cam(self::CID, CamPrefix::RECORD);
        $this->getVlcRpc()->stop_cam(self::CID, CamPrefix::MOTION);
    }

    public function testStop(){
        $this->getVlcRpc()->stop();
    }

    public function testVlcStop(){
        $this->getVlc()->stop();
    }
}
