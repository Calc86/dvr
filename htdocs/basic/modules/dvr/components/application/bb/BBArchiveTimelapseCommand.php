<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 26.06.14
 * Time: 18:39
 */

namespace system2;

use app\modules\dvr\components\common\EveryTimeCommandDecorator;
use app\modules\dvr\components\interfaces\ICam;
use app\modules\dvr\components\interfaces\ICommand;
use app\modules\dvr\components\motion\TimelapseCommand;
use app\modules\dvr\components\mysql\Database;
use app\modules\dvr\components\mysql\MysqlQueryException;

/**
 * Занести Timelapse в базу данных
 * Class BBArchiveTimelapseCommand
 * @package system2
 */
class BBArchiveTimelapseCommand implements ICommand {
    /**
     * @var ?ICam
     */
    private ?ICam $cam;

    /**
     * @param ICam $cam
     */
    function __construct(ICam $cam)
    {
        $this->cam = $cam;
    }

    /**
     * @return void
     * @throws MysqlQueryException
     */
    public function execute()
    {
        $timelapseCommand = new TimelapseCommand($this->cam);
        $timeCommand = new EveryTimeCommandDecorator($this->cam->getID().'_timelapse', $timelapseCommand, TIME_LOCK_TIMELAPSE);
        $timeCommand->execute();

        if($timeCommand->isExecuted()){
            $camID = $this->cam->getID();
            $start = $timelapseCommand->getStartTime();
            $end = $timelapseCommand->getEndTime();
            $file = $timelapseCommand->getNfsPath().'/'.$timelapseCommand->getTimelapseName();
            $file = str_replace('.mp4', '', $file);
            $q = "insert into archive values (0, '$camID', 'timelapse', '$start', '$end', 0, 0, 'yes', 0, '$file')";
            Database::getInstance()->query($q);
        }
    }

} 