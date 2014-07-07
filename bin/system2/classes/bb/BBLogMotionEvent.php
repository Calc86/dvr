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
class BBLogMotionEvent extends Event {
    /**
     * @param $user User
     * @param $cam Cam
     * @param $timestamp
     * @param array $params
     */
    public function handle($user, $cam, $timestamp, array $params)
    {
        if(isset($params[0])) $timestamp = strtotime($params[0]);

        $e = new bb\Events(0, $this->getName());
        $e->user_id = $user == null ? 0 : $user->getID();
        $e->cam_id = $cam == null ? 0 : $cam->getID();
        $e->time = $timestamp;

        $e->save();
    }
}
