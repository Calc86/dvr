<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 14.05.14
 * Time: 21:30
 */

namespace app\modules\vlc\components\vlc2;

use app\modules\vlc\components\common\Cam;
use app\modules\vlc\components\common\Streams;

/**
 * Простая камера с вещанием прямого потока с камеры и записи его на диск.
 * Class VlcCam
 * @package system2
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
