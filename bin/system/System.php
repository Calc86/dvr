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
     *
     */
    function __construct()
    {
        Log::getInstance()->put(__FUNCTION__, __CLASS__);
    }


    /**
     * @param \UserID $id
     * @return User
     */
    protected function buildSystem(\UserID $id){
        //$userId = new \UserID($id);
        //Log::getInstance($id)->setUserID(0);
        Log::getInstance($id)->put(__FUNCTION__, __CLASS__);

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
                Log::getInstance()->put($e->getCode().' '.$e->getMessage()."\n".$e->getTraceAsString()."\n", __CLASS__, Log::ERROR);
            }
        }
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
                Log::getInstance()->put($e->getCode().' '.$e->getMessage()."\n".$e->getTraceAsString()."\n", __CLASS__, Log::ERROR);
            }
        }

        $this->recPts();
        //(new \BashCommand('php '.BIN.'util/rec-pts.php'))->exec();
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
                Log::getInstance()->put($e->getCode().' '.$e->getMessage()."\n".$e->getTraceAsString()."\n", __CLASS__, Log::ERROR);
            }
        }
    }

    public function update(){
        $lock_path = TMP.'/update.lock';

        if(file_exists($lock_path)){
            Log::getInstance()->put('update.lock');
            return;
        }  //кто то делает апдейт
        //создаем lock
        $f = fopen($lock_path, "w+");
        fclose($f);

        $db = \Database::getInstance();
        $q = "select id from users where banned=0";
        $r = $db->query($q);
        while(($row = $r->fetch_row())){
            try{
                $this->buildSystem(new \UserID($row[0]))->getDvr()->update();
            }
            catch(\Exception $e){
                Log::getInstance()->put($e->getCode().' '.$e->getMessage()."\n".$e->getTraceAsString()."\n", __CLASS__, Log::ERROR);
            }
        }
        //делаем перенос из pre папок
        //делаем синхронно, чтобы не забивать канал сети. Так же ждем выполнения, чтобы не перезаписать файлы пир долгом переносе.
        $this->recPts();

        //убиваем lock
        unlink($lock_path);
    }

    private function recPts(){
        Log::getInstance()->setUserID(0);
        Log::getInstance()->put(__FUNCTION__, __CLASS__);
        //$db = open_db(MYHOST, MYUSER, MYPASS, MYDB);
        $db = \Database::getInstance();
        //делаем лимит, так как у нас сейчас оооочень много непроконверченных файликов
        $q = "select id,file from archive where rebuilded='no' and type='rec' order by id desc limit 50";
        $r = $db->query($q);
        if(!$r) throw new \MysqlQueryException($q);

        $nas = new \nas();
        if($nas->is_mount()){
            while(($row=$r->fetch_row()) != 0){
                list($id,$file) = $row;
                Log::getInstance()->put("start #$id", __CLASS__);
                $time = time();
                $start = microtime_float();

                //перемещаем файл
                $path = str_replace('/rec/','/pre_rec/',$file);
                $newPath = $file;
                if(!is_dir(dirname($newPath))){
                    mkdir(dirname($newPath));
                }
                $ffmpeg = new \BashCommand("ffmpeg -y -i $path.avi -codec copy $newPath.mp4\n");
                Log::getInstance()->put($ffmpeg, __CLASS__);
                $ffmpeg->exec();
                //если это какой либо мжпег поток
                if(file_exists($newPath.'.mp4') && (filesize($newPath.".mp4") == 0)){
                    unlink($newPath.".mp4");
                }

                if(!file_exists($newPath.'.mp4')){
                    $mv = new \BashCommand("mv $path.avi $newPath.avi\n");
                    Log::getInstance()->put($mv, __CLASS__);
                    $mv->exec();
                }
                else{
                    if(file_exists($path.'.avi'))
                        unlink($path.".avi");
                }

                $end = microtime_float();
                $r_time = $end-$start;

                $qu = "update archive set rebuilded='yes', date_rebuild=$time, time_rebuild=$r_time where id=$id";
                if(!$db->query($qu)) throw new \MysqlQueryException($qu);
                Log::getInstance()->put("stop", __CLASS__);
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
