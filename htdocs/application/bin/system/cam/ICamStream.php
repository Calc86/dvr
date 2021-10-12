<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 29.03.14
 * Time: 17:00
 */

namespace system;

/**
 * Interface ICamStream
 * @package system
 */
interface ICamStream {
    public function start();
    public function stop();
    public function isPlaying();
    public function update();
    public function create();
    public function delete();
    public function getName();
}
