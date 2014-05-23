<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 12.05.14
 * Time: 16:29
 */

namespace system2;

/**
 * Class MysqlSystem
 * @package system2
 */
class BBSystem extends System{
    public function create(){
        $db = \Database::getInstance();
        $q = "select id from users where banned=0";
        $r = $db->query($q);
        while(($row = $r->fetch_row())){
            try{
                $this->users[] = new BBUser($row[0]);
            }
            catch(\Exception $e){
                Log::getInstance()->put($e->getCode().' '.$e->getMessage()."\n".$e->getTraceAsString()."\n", __CLASS__, Log::ERROR);
            }
        }

        parent::create();

        //$this->recPts();
    }
}