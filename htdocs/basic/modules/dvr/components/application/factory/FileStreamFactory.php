<?php

namespace app\modules\dvr\components\application\factory;

use app\modules\dvr\components\common\AbstractFactory;
use app\modules\dvr\components\common\DVR;
use app\modules\dvr\components\common\Streams;
use app\modules\dvr\components\interfaces\ICam;
use app\modules\dvr\components\interfaces\ICamStream;
use app\modules\dvr\components\vlc2\LiveVlcStream;
use app\modules\dvr\components\vlc2\Vlc;

/**
 * Тестовый файл для проверки запуска стриминга
 */
class FileStreamFactory extends AbstractFactory
{
    protected function createCams(DVR $dvr): array
    {
        return [];
    }

    protected function createDaemons(DVR $dvr): array
    {
        return [
            new Vlc($dvr)
        ];
    }

    public function createStream(ICam $cam): ICamStream
    {
        $stream = new Streams($cam);
        $live = new LiveVlcStream($cam);
        $stream->addStream($live);

        return $stream;
    }
}
