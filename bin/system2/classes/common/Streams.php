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
     * @param ICamStream $stream
     * @param string $name
     */
    public function addStream(ICamStream $stream, $name = ''){
        if($name != '')
            $this->streams[$name] = $stream;
        else
            $this->streams[] = $stream;
    }

    /**
     * @param $name
     * @return null|Stream
     */
    public function get($name){
        if(isset($this->streams[$name])) return $this->streams[$name];
        return null;
    }

    public function create()
    {
        parent::create();
        foreach($this->streams as $stream){
            /** @var $stream ICamStream */
            $stream->create();
        }
    }

    public function _start()
    {
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