<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 12.05.14
 * Time: 14:28
 */

namespace app\modules\vlc\components;

/**
 * Interface IControlled
 * @package system2
 */
interface IControlled {
    public function start();
    public function stop();
    public function restart();
    public function update();
}
