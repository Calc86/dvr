<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 28.03.14
 * Time: 14:04
 */

class vlcBin extends PHPUnit_Framework_TestCase {

    public function testStartup()
    {
        require_once(dirname(__FILE__).'/../bin/startup/startup.php');
    }

    private function vlc($argc,$argv){
        require_once(dirname(__FILE__).'/../bin/control/vlc.control.php');
    }

    private function cam($argc,$argv){
        require_once(dirname(__FILE__).'/../bin/control/cam.control.php');
    }

    public function  testCamControl(){
        $actions = array(
            'play',
            'stop',
            'show',
            'delete',
        );

        foreach($actions as $act){
            echo "$act:";
            $argv = array('',$act,'1','1',CamPrefix::LIVE);
            $argc = 5;
            $this->cam($argc,$argv);
            echo "\n";
        }
    }

    public function testVlcControl(){
        $actions = array(
            'start',
            'stop',
            'restart',
            'kill',
            'ps_kill',
            'status',
            'mount',
            'un_mount',
            'is_run'
        );

        foreach($actions as $act){
            echo "$act:";
            $argv = array('',$act,'1');
            $argc = 3;
            $this->vlc($argc,$argv);
            echo "\n";
        }
    }

    public function testUtilRecClear(){
        require_once(dirname(__FILE__).'/../bin/util/rec-clear.php');
    }

    public function testUtilRecPts(){
        require_once(dirname(__FILE__).'/../bin/util/rec-pts.php');
    }

    public function testUtilRecPts2(){
        require_once(dirname(__FILE__).'/../bin/util/rec-pts2.php');
    }
}
 