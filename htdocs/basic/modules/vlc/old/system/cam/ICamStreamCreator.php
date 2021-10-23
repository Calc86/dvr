<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 29.03.14
 * Time: 18:51
 */

namespace system;

/**
 * Interface ICamStreamCreator
 * @package system
 *
 * @deprecated
 */
interface ICamStreamCreator extends \Iterator{
    /**
     * @return array of ICamStream
     */
    public function getStreams();
} 