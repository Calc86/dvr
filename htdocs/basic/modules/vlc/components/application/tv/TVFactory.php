<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 05.06.14
 * Time: 14:51
 */

namespace system2;

use app\modules\vlc\components\common\AbstractFactory;
use app\modules\vlc\components\common\CamSettings;
use app\modules\vlc\components\common\DVR;
use app\modules\vlc\components\common\Streams;
use app\modules\vlc\components\interfaces\ICam;
use app\modules\vlc\components\interfaces\ICamStream;
use app\modules\vlc\components\interfaces\ISystem;
use app\modules\vlc\components\vlc2\LiveVlcStream;
use app\modules\vlc\components\vlc2\Vlc;

/**
 * Class TVFactory
 * @package system2
 */
class TVFactory extends AbstractFactory
{
    /**
     * @param DVR $dvr
     * @return array of Daemons
     */
    protected function createDaemons(DVR $dvr): array
    {
        $vlc = new Vlc($dvr);

        return array($vlc);
    }

    /**
     * @return ISystem
     */
    public function createSystem(): ISystem
    {
        return TVSystem::getInstance();
    }


    /**
     * @param Dvr $dvr
     * @return array
     */
    protected function createCams(Dvr $dvr): array
    {
        $db = array(
            #EXTINF:CТC ,CТC
            //'udp://@224.0.90.25:1234',
            #EXTINF:2x2 ,2x2
            'udp://@224.0.90.60:1234',
            #EXTINF:Discovery tvg-name="Discovery" ,Discovery
            //'udp://@224.0.90.68:1234',
            #EXTINF:Роccия 2 tvg-name="Россия_2_(Спорт)" ,Роccия 2
            //'udp://@224.0.90.85:1234',
        );

        $i = 0;
        $cams = array();
        foreach ($db as $link) {
            /** @var BBCamSettings $row */

            $el = parse_url($link);

            $cs = new CamSettings();

            $cs->setId(++$i);
            $cs->setLiveProto($el['scheme']);
            $cs->setIp($el['host']);
            $cs->setLivePort($el['port']);
            $cs->setLivePath('');

            //$dvr->addCam(AbstractFactory::getInstance()->createCam($dvr, $cs));
            $cams[] = AbstractFactory::getInstance()->createCam($dvr, $cs);
        }
        return $cams;
    }

    /**
     * @param ICam $cam
     * @return ICamStream
     */
    public function createStream(ICam $cam): ICamStream
    {
        $stream = new Streams($cam);
        $live = new LiveVlcStream($cam);
        $stream->addStream($live);

        //$this->stream->addStream(new RecVlcStream($this, $live));

        //$this->stream->addStream(new TVReStream($this, $live));

        return $stream;
    }

} 