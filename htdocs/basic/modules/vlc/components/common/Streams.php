<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 04.06.14
 * Time: 13:13
 */

namespace app\modules\vlc\components\common;

use app\modules\vlc\components\interfaces\ICamStream;

/**
 * Class Streams
 * @package system2
 */
class Streams extends Stream
{
    private array $streams = [];

    /**
     * @param ICamStream $stream
     * @param string $name
     */
    public function addStream(ICamStream $stream, string $name = '')
    {
        if ($name != '')
            $this->streams[$name] = $stream;
        else
            $this->streams[] = $stream;
    }

    /**
     * @param $name
     * @return null|Stream
     */
    public function get($name): ?Stream
    {
        if (isset($this->streams[$name])) return $this->streams[$name];
        return null;
    }

    public function create()
    {
        parent::create();
        foreach ($this->streams as $stream) {
            /** @var $stream ICamStream */
            $stream->create();
        }
    }

    public function _start()
    {
        foreach ($this->streams as $stream) {
            /** @var $stream ICamStream */
            $stream->start();
        }
    }

    public function stop()
    {
        parent::stop();

        foreach (array_reverse($this->streams) as $stream) {
            /** @var $stream ICamStream */
            $stream->stop();
        }
    }

    public function update()
    {
        parent::update();

        foreach ($this->streams as $stream) {
            /** @var $stream ICamStream */
            $stream->update();
        }
    }
} 