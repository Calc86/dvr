<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 09.04.14
 * Time: 15:15
 */

namespace system;


/**
 * Class FileSystem
 * @package system
 */
class FileSystem extends System{
    /**
     * @param \UserID $id
     * @return User
     */

    /**
     * @var string
     */
    private $file;

    /**
     * @param String $file Прочитать файл настроек, первая строка обязательно должна быть \n
     */
    function __construct($file)
    {
        $this->file = file_get_contents($file);
    }

    /**
     * @param \UserID $id
     * @return User
     */
    protected function buildSystem(\UserID $id){
        //$userId = new \UserID($id);
        $userId = $id;
        $dvr = new Vlc($userId, new FileCamCreator($userId, $this->file));
        return new User($userId, $dvr);
    }


    public function startup(){
        $r = array(1);
        while(($row = each($r)) != FALSE){
            $row[0] = $row[1];
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
        $r = array(1);
        while(($row = each($r)) != FALSE){
            $row[0] = $row[1];
            try{
                $this->buildSystem($row[0])->getDvr()->shutdown();
            }
            catch(\Exception $e){
                echo "==========\n";
                echo $e->getCode().' '.$e->getMessage()."\n";
                echo $e->getTraceAsString()."\n";
                echo "\n\n";
            }
        }
    }

    public function live(){
        $r = array(1);
        while(($row = each($r)) != FALSE){
            $row[0] = $row[1];
            var_dump($row);
            $row[0] = $row;
            try{
                $this->buildSystem($row[0])->getDvr()->live();
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
        $r = array(1);
        while(($row = each($r)) != FALSE){
            $row[0] = $row[1];
            try{
                $this->buildSystem($row[0])->getDvr()->update();
            }
            catch(\Exception $e){
                echo "==========\n";
                echo $e->getCode().' '.$e->getMessage()."\n";
                echo $e->getTraceAsString()."\n";
                echo "\n\n";
            }
        }
    }
} 