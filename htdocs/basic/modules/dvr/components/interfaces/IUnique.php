<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 13.05.14
 * Time: 14:27
 */

namespace app\modules\dvr\components\interfaces;

/**
 * Interface IUnique мы имеем id
 * @package system2
 */
interface IUnique {
    /**
     * @return integer id
     */
    public function getID(): int;
} 