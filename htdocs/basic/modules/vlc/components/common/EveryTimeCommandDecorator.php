<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 26.06.14
 * Time: 18:09
 */

namespace app\modules\vlc\components\common;

use app\modules\vlc\components\ICommand;

/**
 * Обертка для команд, которые должны вызываться раз в некоторое время, а не каждый раз
 * Class EveryTimeCommandDecorator
 * @package system2
 */
class EveryTimeCommandDecorator implements ICommand
{
    private string $lockName;
    /**
     * @var ?ICommand
     */
    private ?ICommand $command;
    /**
     * @var int
     */
    private int $time;
    private bool $executed = false;

    /**
     * @param $lockName
     * @param ICommand $command
     * @param $time
     */
    function __construct($lockName, ICommand $command, $time)
    {
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

        if ($lock->create()) {
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
    public function isExecuted(): bool
    {
        return $this->executed;
    }
} 