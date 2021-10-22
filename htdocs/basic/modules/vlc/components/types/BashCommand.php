<?php

namespace app\modules\vlc\types;

class BashCommand extends Command{
    public function __construct($value)
    {
        if(strlen($value) < 2) throw new CommandException();
        parent::__construct($value);
    }

    /**
     * @return BashResult last line
     */
    public function exec(){
        return new BashResult(exec($this->get()));
    }

    /**
     * @return BashResult
     */
    public function shell_exec(){
        return new BashResult(shell_exec($this->get()));
    }

}
