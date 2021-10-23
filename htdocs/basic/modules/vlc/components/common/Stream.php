<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 12.05.14
 * Time: 18:37
 */

namespace app\modules\vlc\components\common;

use app\modules\vlc\components\ICam;
use app\modules\vlc\components\ICamStream;

/**
 * Камера системы имеет разные потоки, локальные и внешние, либо потоки записи/декодирования
 * Class Stream
 * @package system2
 */
abstract class Stream implements ICamStream
{

    private bool $enabled = true;

    /**
     * @var ICam
     */
    protected ICam $cam;

    /**
     * @param ICam $cam
     */
    function __construct(ICam $cam)
    {
        $this->cam = $cam;
    }

    public function create()
    {
        $this->log(get_class($this) . ":" . __FUNCTION__);
    }

    public function delete()
    {
        $this->log(__FUNCTION__);
    }

    final public function start()
    {
        //если система стопится, то мы не запускаем
        if (System::getInstance()->getFlag(System::FLAG_STOP)) return;

        //если стрим disabled, то не стартуем
        if (!$this->isEnabled()) return;

        $this->log(__FUNCTION__);

        $this->_start();
    }

    abstract public function _start();

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
     * @param $enabled
     */
    public function setEnabled($enabled)
    {
        $this->enabled = boolval($enabled);

        //пусть выполнит все свои "фишки" и мы о нем забудем
        /*if(!$this->enabled){
            $this->update();
        }*/
    }

    /**
     * @return bool
     */
    public function isEnabled(): bool
    {
        return $this->enabled;
    }

    /**
     * write message to log
     * @param $message
     * @return void
     */
    public function log($message)
    {
        Log::getInstance($this->cam->getID())->put($message, $this);
    }
}
