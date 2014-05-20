<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 12.05.14
 * Time: 18:37
 */

namespace system2;

/**
 * Камера системы имеет разные потоки, локальные и внешние, либо потоки записи/декодирования
 * Class Stream
 * @package system2
 */
class Stream implements ICamStream {
    /**
     * @var ICam
     */
    protected $cam;

    /**
     * @param ICam $cam
     */
    function __construct(ICam $cam)
    {
        $this->cam = $cam;
    }

    public function create()
    {
        $this->log(__FUNCTION__);
    }

    public function start()
    {
        $this->log(__FUNCTION__);
    }

    public function stop()
    {
        $this->log(__FUNCTION__);
    }

    public function restart()
    {
        $this->log(__FUNCTION__);
        $this->stop();
        $this->start();
    }

    public function update()
    {
        $this->log(__FUNCTION__);
    }

    /**
     * write message to log
     * @param $message
     * @return void
     */
    public function log($message)
    {
        Log::getInstance($this->cam->getID())->put($message, __CLASS__);
    }


}
