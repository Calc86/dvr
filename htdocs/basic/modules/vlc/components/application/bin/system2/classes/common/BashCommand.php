<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 24.06.14
 * Time: 10:48
 */

namespace system2;


class BashCommand implements ICommand {
    private $cmd;

    function __construct($cmd)
    {
        $this->cmd = $cmd;
    }


    /**
     * @return void
     */
    public function execute()
    {
        $bash = new \BashCommand($this->cmd);
        $bash->exec();
    }
} 