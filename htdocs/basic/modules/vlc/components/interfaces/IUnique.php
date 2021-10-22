<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 13.05.14
 * Time: 14:27
 */

namespace system2;

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