<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 28.03.14
 * Time: 14:04
 */

class vlcWorkflow extends PHPUnit_Framework_TestCase {

    /**
     * @return vlc
     */
    public function getVlc(){
        return new vlc(new UserID(1));
    }

    public function testVlcPsKill()
    {
        $this->getVlc()->ps_kill();
    }

    public function testVlcStart(){
        $this->getVlc()->start();
    }

    public function testVlcStatus(){
        $this->getVlc()->status();
        $this->assertEquals(1,$this->getVlc()->is_run());
    }

    public function getCC(CamPrefix $pref){
        return new cam_control_archive(new UserID(1), new CamID(1),$pref);
    }

    public function testCCStop(){
        $this->getCC(new CamPrefix(CamPrefix::MOTION))->stop();
        $this->getCC(new CamPrefix(CamPrefix::RECORD))->stop();
        $this->getCC(new CamPrefix(CamPrefix::LIVE))->stop();
    }

    public function testCCPlay(){
        $this->getCC(new CamPrefix(CamPrefix::LIVE))->play();
        $this->getCC(new CamPrefix(CamPrefix::RECORD))->play();
    }

    public function testVlcStop(){
        $this->getVlc()->stop();
    }
}
 