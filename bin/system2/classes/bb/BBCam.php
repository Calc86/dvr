<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 15.05.14
 * Time: 0:58
 */

namespace system2;

/**
 * Собственная сборка камеры с HLS и FLV, и записью потока на диск
 * Class BBCam
 * @package system2
 */
class BBCam extends VlcCam{
    /**
     * @param IDVR $dvr
     * @param ICamSettings $cs
     */
    function __construct(IDVR $dvr, ICamSettings $cs)
    {
        parent::__construct($dvr, $cs);

        $cs = $this->cs;
        /** @var $cs BBCamSettings */
        if($cs->live) $this->streams[] = new MotionStream($this, $cs);
    }

    /**
     * Создает стрим (new)
     * @return void
     */
    function createStream()
    {
        $this->stream = new Streams($this);

        $cs = $this->cs;
        /** @var $cs BBCamSettings */
        if($cs->live){
            $live = new BBLiveStream($this);
            $this->stream->addStream($live);

            $this->stream->addStream(new HLSVlcStream($this, $live));
            //$this->streams[] = new FlvVlcReStream($this, $live);

            //nginx rtmp stream
            //$this->streams[] = new RtmpVlcReStream($this, $live);

            if($cs->rec) $this->stream->addStream(new BBRecStream($this, $live));

            //motion flv stream
            $this->stream->addStream(
                new UrlFlvVlcStream($this, "http://localhost:".(MOTION_STREAM_PORT + $this->getID()))
            );
        }
    }
}
