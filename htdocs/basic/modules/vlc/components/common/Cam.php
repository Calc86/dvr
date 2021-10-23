<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 12.05.14
 * Time: 15:42
 */

namespace app\modules\vlc\components\common;

use app\modules\vlc\components\ICam;
use app\modules\vlc\components\ICamSettings;
use app\modules\vlc\components\ICamStream;
use app\modules\vlc\components\IDVR;

/**
 * Задает основной алгоритм работы камеры в системе (потоки и т.д.)
 * Class Cam
 * @package system2
 */
class Cam implements ICam
{
    protected int $id = 0;

    /**
     * @var ICamSettings|null
     */
    protected ?ICamSettings $cs = null;

    /**
     * @var IDVR
     */
    protected IDVR $dvr;
    //protected $streams = array();
    /**
     * @var Streams
     */
    protected $stream;

    /**
     * @param IDVR $dvr
     * @param ICamSettings $cs
     */
    function __construct(IDVR $dvr, ICamSettings $cs)
    {
        $this->id = $cs->getID();

        $this->log(__FUNCTION__);

        $this->dvr = $dvr;
        $this->setSettings($cs);

        $this->stream = AbstractFactory::getInstance()->createStream($this);
    }

    /**
     * @return int
     */
    public function getID(): int
    {
        return $this->id;
    }

    /**
     * @return ICamStream
     */
    public function getStream()
    {
        return $this->stream;
    }

    /**
     * Создает streams после запуска демонов
     */
    final public function create()
    {
        $this->log(__FUNCTION__);

        $this->stream->create();
    }

    public function delete()
    {
        $this->log(__FUNCTION__);

        $this->stream->delete();
    }

    public function start()
    {
        $this->log(__FUNCTION__);

        $this->stream->start();
    }

    public function stop()
    {
        $this->log(__FUNCTION__);

        $this->stream->stop();
    }

    public function restart()
    {
        $this->log(__FUNCTION__);

        $this->stream->restart();
    }

    public function update()
    {
        $this->log(__FUNCTION__);

        $this->stream->update();
    }

    /**
     * @return IDVR
     */
    public function getDVR(): IDVR
    {
        return $this->dvr;
    }

    /**
     * @return ICamSettings
     */
    public function getSettings(): ICamSettings
    {
        return $this->cs;
    }

    /**
     * @param ICamSettings $cs
     */
    public function setSettings(ICamSettings $cs)
    {
        $this->cs = $cs;
    }

    /**
     * @param $message
     */
    public function log($message)
    {
        Log::getInstance($this->getID())->put($message, $this);
    }
}
