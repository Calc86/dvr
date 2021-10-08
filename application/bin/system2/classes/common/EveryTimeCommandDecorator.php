<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 26.06.14
 * Time: 18:09
 */

namespace system2;

/**
 * Обертка для команд, которые должны вызываться раз в некоторое время, а не каждый раз
 * Class EveryTimeCommandDecorator
 * @package system2
 */
class EveryTimeCommandDecorator implements ICommand {
    private $lockName;
    /**
     * @var ICommand
     */
    private $command = null;
    /**
     * @var int
     */
    private $time = 0;
    private $executed = false;

    /**
     * @param $lockName
     * @param ICommand $command
     * @param $time
     */
    function __construct($lockName, ICommand $command, $time)
    {
        //dasd
        $this->command = $command;
        $this->time = $time;
        $this->lockName = $lockName;
    }

    /**
     * @return void
     */
    public function execute()
    {
        $lock = new TimeLock($this->lockName, $this->time);

        if($lock->create()){
            $this->command->execute();
            $this->executed = true;
        }
        /*else{
            //nothing
        }*/
    }

    /**
     * @return bool
     */
    public function isExecuted(){
        return $this->executed;
    }
} 