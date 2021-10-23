<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 20.06.14
 * Time: 22:01
 */

namespace system2;

use app\modules\vlc\components\ICommand;
use app\modules\vlc\types\BashCommand;

/**
 * Переместить file в nfs из tmpfs
 * Class MoveToNfsCommand
 * @package system2
 * @deprecated
 */
class MoveToNfsCommand implements ICommand
{

    private string $pathFrom;
    private string $pathTo;

    /**
     * @param string $pathFrom
     * @param string $pathTo
     */
    function __construct(string $pathFrom, string $pathTo)
    {
        $this->pathFrom = $pathFrom;
        $this->pathTo = Path::getNfsPath(dirname($pathTo)) . "/" . basename($pathTo);
    }

    /**
     * @return void
     */
    public function execute()
    {
        $mv = new BashCommand("mv $this->pathFrom $this->pathTo\n");
        $mv->exec();
    }
} 