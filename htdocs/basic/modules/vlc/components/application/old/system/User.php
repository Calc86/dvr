<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 29.03.14
 * Time: 16:47
 */

namespace system;

/**
 * Class User
 * @package system
 */
class User {
    /**
     * @var \UserID
     */
    private $uid;
    /**
     * @var IDVR
     */
    private $dvr;

    /**
     * @param \UserID $uid
     * @param IDVR $dvr
     */
    function __construct(\UserID $uid, IDVR $dvr)
    {
        $this->dvr = $dvr;
        $this->uid = $uid;
    }

    /**
     * @return \system\IDVR
     */
    public function getDvr()
    {
        return $this->dvr;
    }
} 