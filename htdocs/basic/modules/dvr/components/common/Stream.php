<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 12.05.14
 * Time: 18:37
 */

namespace app\modules\dvr\components\common;

use app\modules\dvr\components\interfaces\ICam;
use app\modules\dvr\components\interfaces\ICamStream;
use app\modules\dvr\components\SystemConfig;

/**
 * Камера системы имеет разные потоки, локальные и внешние, либо потоки записи/декодирования
 * Class Stream
 * @package system2
 */
abstract class Stream implements ICamStream
{

    private bool $enabled = true;
    protected SystemConfig $config;

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
        $this->config = new SystemConfig(); // todo 20211025 add confgi to constructor or singleton
    }

    public function create()
    {
        $this->log(get_class($this) . ":" . __METHOD__);
    }

    public function delete()
    {
        $this->log(__METHOD__);
    }

    final public function start()
    {
        //если система стопится, то мы не запускаем
        if (System::getInstance()->getFlag(System::FLAG_STOP)) return;

        //если стрим disabled, то не стартуем
        if (!$this->isEnabled()) return;

        $this->log(__METHOD__);

        $this->_start();
    }

    /**
     * @return mixed
     */
    abstract public function _start();

    public function stop()
    {
        $this->log(__METHOD__);
    }

    public function restart()
    {
        $this->log(__METHOD__);
        $this->stop();
        $this->start();
    }

    public function update()
    {
        $this->log(__METHOD__);
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
