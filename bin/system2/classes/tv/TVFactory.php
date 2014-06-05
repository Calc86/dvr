<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 05.06.14
 * Time: 14:51
 */

namespace system2;

/**
 * Class TVFactory
 * @package system2
 */
class TVFactory extends AbstractFactory {
    /**
     * @param int $id
     * @return IUser
     */
    public function createUser($id)
    {
        return new User($id);
    }

    /**
     * @param IUser $user
     * @return IDVR
     */
    public function createDvr(IUser $user)
    {
        $dvr = new Dvr($user);

        $this->createCams($dvr);    //new+add

        $vlc = new Vlc($dvr);
        //$vlc->setValgrind();    //set mem leak debug
        $dvr->addDaemon($vlc);

        return $dvr;
    }

    /**
     * @param Dvr $dvr
     */
    private function createCams(Dvr $dvr){
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

        $i=0;
        foreach($db as $link){
            /** @var BBCamSettings $row */

            $el = parse_url($link);

            $cs = new CamSettings();

            $cs->setId(++$i);
            $cs->setLiveProto($el['scheme']);
            $cs->setIp($el['host']);
            $cs->setLivePort($el['port']);
            $cs->setLivePath('');

            $dvr->addCam(AbstractFactory::getInstance()->createCam($dvr, $cs));
        }
    }

    /**
     * @param IDVR $dvr
     * @param ICamSettings $cs
     * @return ICam
     */
    public function createCam(IDVR $dvr, ICamSettings $cs)
    {
        return new Cam($dvr, $cs);
    }

    /**
     * @param ICam $cam
     * @return ICamStream
     */
    public function createStream(ICam $cam)
    {
        $stream = new Streams($cam);
        $live = new LiveVlcStream($cam);
        $stream->addStream($live);

        //$this->stream->addStream(new RecVlcStream($this, $live));

        //$this->stream->addStream(new TVReStream($this, $live));

        return $stream;
    }

} 