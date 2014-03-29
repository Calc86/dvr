<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 29.03.14
 * Time: 17:28
 */

namespace system;

/**
 * Interface ICamCreator
 * для создания камер
 * @package system
 */
interface ICamCreator extends \Iterator {
    /**
     * @param \CamID $cid
     * @return mixed
     */
    public function create(\CamID $cid);
} 