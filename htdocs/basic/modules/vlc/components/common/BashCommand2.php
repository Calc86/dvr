<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 24.06.14
 * Time: 10:48
 */

namespace app\modules\vlc\components\common;


use app\modules\vlc\components\interfaces\ICommand;

/**
 *
 */
class BashCommand2 implements ICommand {
    private string $cmd;

    /**
     * @param string $cmd
     */
    function __construct(string $cmd)
    {
        $this->cmd = $cmd;
    }


    /**
     * @return void
     */
    public function execute()
    {
        $bash = new BashCommand2($this->cmd);
        $bash->execute();
    }
}
