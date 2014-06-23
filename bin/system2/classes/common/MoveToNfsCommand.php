<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 20.06.14
 * Time: 22:01
 */

namespace system2;

/**
 * Переместить файлик в nfs из tmpfs
 * Class MoveToNfsCommand
 * @package system2
 */
class MoveToNfsCommand implements ICommand {

    private $pathFrom;
    private $pathTo;

    /**
     * @param $pathFrom
     * @param $pathTo
     */
    function __construct($pathFrom, $pathTo)
    {
        $this->pathFrom = $pathFrom;
        $this->pathTo = Path::getNfsPath(dirname($pathTo))."/".basename($pathTo);
    }

    /**
     * @return void
     */
    public function execute()
    {
        $mv = new \BashCommand("mv $this->pathFrom $this->pathTo\n");
        $mv->exec();
    }

} 