<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 12.05.14
 * Time: 17:05
 */

namespace system2;

/**
 * Class BBUser
 * @package system2
 */
class BBUser extends User{
    public function _create()
    {
        $this->log(__FUNCTION__);
        $this->dvrs[] = new BBDvr($this);
    }
}
