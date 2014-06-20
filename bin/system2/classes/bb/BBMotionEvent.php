<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 20.06.14
 * Time: 15:22
 */

namespace system2;

/**
 * Class BBMotionEvent
 * @package system2
 */
class BBMotionEvent extends Event {
    /**
     * @param $user User
     * @param $cam Cam
     * @param $timestamp
     * @param array $params
     */
    public function handle($user, $cam, $timestamp, array $params)
    {
        if(isset($params[0])) $timestamp = strtotime($params[0]);

        if($cam == null) $camID = 0;
        else $camID = $cam->getID();
        if($user == null) $userID = 0;
        else $userID = $user->getID();

        $q = "insert into events values(0, $userID, $camID, '{$this->getName()}', $timestamp)";
        echo $q."\n";
        Database::getInstance()->query($q);
    }

} 