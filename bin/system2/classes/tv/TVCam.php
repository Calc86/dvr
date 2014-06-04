<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 19.05.14
 * Time: 9:29
 */

namespace system2;

/**
 * Сборка для вещания TV через FLV и HLS
 * Class TVCam
 * @package system2
 */
class TVCam extends VlcCam{
    public function _create()
    {
        $live = new LiveVlcStream($this);
        $this->streams[] = $live;

        //rec
        $this->streams[] = new RecVlcStream($this, $live);

        //rtmp stream from ffmpeg
        //$this->streams[] = new NginxStream($this, $live->getOutUrl());

        //flv
        $this->streams[] = new TVReStream($this, $live);
        //$this->streams[] = new TVHlsStream($this, $live);
        //$this->streams[] = new RtmpVlcReStream($this, $live);
    }
}
