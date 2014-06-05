<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 19.05.14
 * Time: 9:10
 */

namespace system2;

/**
 * Сборка для записи multicast каналов. Каналы передаются в массиве в createCams
 * Class TVDvr
 * @package system2
 */
class TVDvr extends DVR{
    /**
     * @param IUser $user
     */
    function __construct(IUser $user)
    {
        parent::__construct($user);

        $this->createCams();    //new+add

        $vlc = new Vlc($this);
        //$vlc->setValgrind();    //set mem leak debug
        $this->addDaemon($vlc);
    }

    protected function createCams(){
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

            $this->addCam(AbstractFactory::getInstance()->createCam($this, $cs));
        }
    }

    public function update()
    {
        parent::update();
    }


}

