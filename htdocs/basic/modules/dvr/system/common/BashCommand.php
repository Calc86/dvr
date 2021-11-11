<?php

namespace dvr\system\common;

use dvr\system\Helpers;

/**
 * @property-read $cmd
 */
class BashCommand extends Command
{
    public string $cmd;
    protected ?string $result;

    public function __construct(string $cmd)
    {
        parent::__construct();
        
        $this->cmd = $cmd;
    }


    public function execute(): void
    {
        Helpers::log($this->cmd, __METHOD__);
        $this->result = shell_exec($this->cmd);
    }
}