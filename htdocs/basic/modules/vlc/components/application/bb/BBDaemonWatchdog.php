<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 30.06.14
 * Time: 9:46
 */

namespace system2;

use app\modules\vlc\components\common\Daemon;
use app\modules\vlc\components\common\System;
use app\modules\vlc\components\interfaces\ICommand;

/**
 * Проверяет запущен ли демон, если нет, перезапускает его
 * Class BBDaemonWatchdog
 * @package system2
 */
class BBDaemonWatchdog implements ICommand
{
    /**
     * @var Daemon
     */
    private $daemon;

    /**
     * @param Daemon $daemon
     */
    function __construct(Daemon $daemon)
    {
        $this->daemon = $daemon;
    }

    /**
     * @return void
     */
    public function execute()
    {
        if (System::getInstance()->getLock()->isLock() && !$this->daemon->isStarted()) {
            $e = new bb\Events(0, bb\Events::WATCHDOG);
            $e->user_id = $this->daemon->getDvr()->getUser()->getID();
            $e->comment = $this->daemon->getName();
            $e->save();


            //clear daemon status
            $this->daemon->stop();
            //start daemon
            $this->daemon->start();
        }
    }
}
