<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 02.06.14
 * Time: 11:41
 */

namespace app\modules\vlc\components;

/**
 * Interface Command
 * @package system2
 */
interface ICommand {
    /**
     * @return void
     */
    public function execute();
}
