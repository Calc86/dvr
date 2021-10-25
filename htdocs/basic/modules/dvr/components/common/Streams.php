<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 04.06.14
 * Time: 13:13
 */

namespace app\modules\dvr\components\common;

use app\modules\dvr\components\interfaces\ICamStream;

/**
 * Предполагаю, что это композиция для объединения нескольких Streams в один общий интерфейс
 */
class Streams extends Stream
{
    /** @var Stream[] */
    private array $streams = [];

    /**
     * @param ICamStream $stream
     * @param string $name
     */
    public function addStream(ICamStream $stream, string $name = '')
    {
        if ($name != '')
            $this->streams[$name] = $stream;    // Todo 20211025 подумать об этой логике
        else
            $this->streams[] = $stream;
    }

    public function get(string $name): ?Stream
    {
        return $this->streams[$name] ?? null;
//        if (isset($this->streams[$name])) return $this->streams[$name];
//        return null;
    }

    public function create()
    {
        parent::create();
        foreach ($this->streams as $stream) {
            /** @var $stream ICamStream */
            $stream->create();
        }
    }

    /**
     * @return void
     */
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