<?php

namespace app\modules\dvr\components\application\factory;

use app\modules\dvr\components\common\AbstractFactory;
use app\modules\dvr\components\common\CamSettings;
use app\modules\dvr\components\common\DVR;
use app\modules\dvr\components\common\Streams;
use app\modules\dvr\components\interfaces\ICam;
use app\modules\dvr\components\interfaces\ICamStream;
use app\modules\dvr\components\vlc2\HLSVlcStream;
use app\modules\dvr\components\vlc2\LiveVlcStream;
use app\modules\dvr\components\vlc2\Vlc;

/**
 * Тестовый файл для проверки запуска стриминга
 */
class FileStreamFactory extends AbstractFactory
{
    protected function createCams(DVR $dvr): array
    {
        //return [];
        $files = [
            'file:///mnt/data/test/104.mp4',
            //'file:///mnt/data/test/test_video1.mp4',
            //'file:///mnt/data/test/test_video2.mp4',
            //'file:///mnt/data/test/test_video3.mp4',
        ];

        $i = 100;
        $cams = [];
        foreach ($files as $url) {
            $el = parse_url($url);

            $cs = new CamSettings();

            $cs->setId(++$i);
            $cs->setLiveProto($el['scheme']);
            $cs->setIp($el['host']);
            $cs->setLivePort($el['port']);
            $cs->setLivePath($el['path']);

            //$dvr->addCam(AbstractFactory::getInstance()->createCam($dvr, $cs));
            $cams[] = $this->createCam($dvr, $cs);
        }
        return $cams;
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

        $livehttp = new HLSVlcStream($cam, $live);
        $stream->addStream($livehttp);

        return $stream;
    }
}
