<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 04.06.14
 * Time: 13:13
 */

namespace system2;

/**
 * Class Streams
 * @package system2
 */
class Streams extends Stream {
    private $streams = array();

    /**
     * Добавить стрим
     * @param ICamStream $stream
     */
    public function addStream(ICamStream $stream){
        $this->streams[] = $stream;
    }

    public function create()
    {
        parent::create();
        foreach($this->streams as $stream){
            /** @var $stream ICamStream */
            $stream->create();
        }
    }

    public function start()
    {
        parent::start();

        foreach($this->streams as $stream){
            /** @var $stream ICamStream */
            $stream->start();
        }
    }

    public function stop()
    {
        parent::stop();

        foreach(array_reverse($this->streams) as $stream){
            /** @var $stream ICamStream */
            $stream->stop();
        }
    }

    public function update()
    {
        parent::update();

        foreach($this->streams as $stream){
            /** @var $stream ICamStream */
            $stream->update();
        }
    }
} 