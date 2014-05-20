<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 14.05.14
 * Time: 21:30
 */

namespace system2;

/**
 * Простая камера с вещанием прямого потока с камеры и записи его на диск.
 * Class VlcCam
 * @package system2
 */
class VlcCam extends Cam{
    public function _create()
    {
        $live = new LiveVlcStream($this);
        $this->streams[] = $live;
        $this->streams[] = new RecVlcStream($this, $live);
    }
}
