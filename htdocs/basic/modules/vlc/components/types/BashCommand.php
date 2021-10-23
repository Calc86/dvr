<?php

namespace app\modules\vlc\components\types;

use app\modules\vlc\components\exceptions\CommandException;
use app\modules\vlc\components\exceptions\StringException;

class BashCommand extends Command{
    public function __construct($value)
    {
        if(strlen($value) < 2) throw new CommandException();
        parent::__construct($value);
    }

    /**
     * @return BashResult last line
     * @throws StringException
     */
    public function exec(): BashResult
    {
        return new BashResult(exec($this->get()));
    }

    /**
     * @return BashResult
     * @throws StringException
     */
    public function shell_exec(): BashResult
    {
        return new BashResult(shell_exec($this->get()));
    }

}
