<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 26.06.14
 * Time: 18:39
 */

namespace system2;

/**
 * Занести Timelapse в базу данных
 * Class BBArchiveTimelapseCommand
 * @package system2
 */
class BBArchiveTimelapseCommand implements ICommand {
    /**
     * @var ICam
     */
    private $cam = null;

    /**
     * @param ICam $cam
     */
    function __construct(ICam $cam)
    {
        $this->cam = $cam;
    }

    /**
     * @return void
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