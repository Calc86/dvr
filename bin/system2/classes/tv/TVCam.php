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
        $this->streams[] = new TVReStream($this, $live);
        $this->streams[] = new HLSVlcStream($this, $live);
    }
} 