<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 14.05.14
 * Time: 21:30
 */

namespace app\modules\dvr\components\vlc2;

use app\modules\dvr\components\common\Cam;
use app\modules\dvr\components\common\Streams;

/**
 * Простая камера с вещанием прямого потока с камеры и записи его на диск.
 */
class VlcCam extends Cam
{
    /**
     * Создает стрим (new)
     * @return void
     */
    function createStream()
    {
        $this->stream = new Streams($this);
        $live = new LiveVlcStream($this);
        $this->stream->addStream($live);
        $this->stream->addStream(new RecVlcStream($this, $live));
    }
}