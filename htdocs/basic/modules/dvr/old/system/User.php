<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 29.03.14
 * Time: 16:47
 */

namespace system;

use app\modules\dvr\types\UserID;

/**
 * Class User
 * @package system
 * @deprecated
 */
class User {
    /**
     * @var UserID
     */
    private UserID $uid;
    /**
     * @var IDVR
     */
    private IDVR $dvr;

    /**
     * @param UserID $uid
     * @param IDVR $dvr
     */
    function __construct(UserID $uid, IDVR $dvr)
    {
        $this->dvr = $dvr;
        $this->uid = $uid;
    }

    /**
     * @return IDVR
     */
    public function getDvr(): IDVR
    {
        return $this->dvr;
    }
} 