<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 20.06.14
 * Time: 22:01
 */

namespace app\modules\dvr\components\common;

use app\modules\dvr\components\interfaces\ICommand;
use app\modules\dvr\components\SystemConfig;
use app\modules\dvr\components\types\BashCommand;

/**
 * Переместить file в nfs из tmpfs
 * Class MoveToNfsCommand
 * @package system2
 * @deprecated
 */
class MoveToNfsCommand implements ICommand
{
    private SystemConfig $config;
    private string $pathFrom;
    private string $pathTo;

    /**
     * @param string $pathFrom
     * @param string $pathTo
     */
    function __construct(string $pathFrom, string $pathTo)
    {
        $this->config = new SystemConfig(); // todo 20211025
        $this->pathFrom = $pathFrom;
        $this->pathTo = $this->config->getNfsPath(dirname($pathTo)) . "/" . basename($pathTo);
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