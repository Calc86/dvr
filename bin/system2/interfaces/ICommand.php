<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 02.06.14
 * Time: 11:41
 */

namespace system2;

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
