<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 29.03.14
 * Time: 20:59
 */

namespace system;

/**
 * Class System
 * Класс для управления системой
 * @package system
 */
class System {

    /**
     * @param \UserID $id
     * @return User
     */
    protected function buildSystem(\UserID $id){
        //$userId = new \UserID($id);
        $userId = $id;
        $dvr = new MotionVlc($userId, new MysqlCamCreator($userId));
        return new User($userId, $dvr);
    }

    public function startup(){
        $db = \Database::getInstance();
        $q = "select id from users where banned=0";
        $r = $db->query($q);
        while(($row = $r->fetch_row())){
            try{
                $this->buildSystem(new \UserID($row[0]))->getDvr()->startup();
            }
            catch(\Exception $e){
                echo "==========\n";
                echo $e->getCode().' '.$e->getMessage()."\n";
                echo $e->getTraceAsString()."\n";
                echo "\n\n";
            }
        }
        /*catch(\ErrorException $e){
            echo $e->getCode().' '.$e->getMessage();
            echo $e->getTraceAsString();
        }*/
    }

    public function shutdown(){
        $db = \Database::getInstance();
        $q = "select id from users where banned=0";
        $r = $db->query($q);
        while(($row = $r->fetch_row())){
            try{
                $this->buildSystem(new \UserID($row[0]))->getDvr()->shutdown();
            }
            catch(\Exception $e){
                echo "==========\n";
                echo $e->getCode().' '.$e->getMessage()."\n";
                echo $e->getTraceAsString()."\n";
                echo "\n\n";
            }
        }
        (new \BashCommand('php '.BIN.'util/rec-pts.php'))->exec();
    }

    public function live(){
        $db = \Database::getInstance();
        $q = "select id from users where banned=0";
        $r = $db->query($q);
        while(($row = $r->fetch_row())){
            try{
                $this->buildSystem(new \UserID($row[0]))->getDvr()->live();
            }
            catch(\Exception $e){
                echo "==========\n";
                echo $e->getCode().' '.$e->getMessage()."\n";
                echo $e->getTraceAsString()."\n";
                echo "\n\n";
            }
        }
    }

    public function update(){
        $db = \Database::getInstance();
        $q = "select id from users where banned=0";
        $r = $db->query($q);
        while(($row = $r->fetch_row())){
            try{
                $this->buildSystem(new \UserID($row[0]))->getDvr()->update();
            }
            catch(\Exception $e){
                echo "==========\n";
                echo $e->getCode().' '.$e->getMessage()."\n";
                echo $e->getTraceAsString()."\n";
                echo "\n\n";
            }
        }
    }

    /**
     * @param \UserID $userID
     */
    public function user_start(\UserID $userID){
        $this->buildSystem($userID)->getDvr()->start();
    }

    /**
     * @param \UserID $userID
     */
    public function user_stop(\UserID $userID){
        $this->buildSystem($userID)->getDvr()->stop();
    }

    /**
     * @param \UserID $userID
     * @param \CamID $camID
     * @param \CamPrefix $camPrefix
     */
    public function cam_play(\UserID $userID, \CamID $camID, \CamPrefix $camPrefix){
        $this->buildSystem($userID)->getDvr()->getCam($camID)->getStream($camPrefix)->start();
    }

    /**
     * @param \UserID $userID
     * @param \CamID $camID
     * @param \CamPrefix $camPrefix
     */
    public function cam_stop(\UserID $userID, \CamID $camID, \CamPrefix $camPrefix){
        $this->buildSystem($userID)->getDvr()->getCam($camID)->getStream($camPrefix)->stop();
    }

    /**
     * @param \UserID $userID
     * @param \CamID $camID
     */
    public function cam_update(\UserID $userID, \CamID $camID){
        $this->buildSystem($userID)->getDvr()->getCam($camID)->update();
    }

    /**
     * @param \UserID $userID
     * @param \CamID $camID
     */
    public function cam_reload(\UserID $userID, \CamID $camID){
        $cam = $this->buildSystem($userID)->getDvr()->getCam($camID);
        $cam->stop();
        $cam->delete();
        $cam->create();
        $cam->start();
    }
}
