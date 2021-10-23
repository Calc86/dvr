<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 14.05.14
 * Time: 19:03
 */

namespace system2;

use app\modules\vlc\components\ICam;

/**
 * Http live-streaming from vlc
 * Class HLSVlcStream
 * @package system2
 */
class HLSVlcStream extends VlcReStream
{
    /**
     * @param ICam $cam
     * @param LiveVlcStream $live
     */
    function __construct(ICam $cam, LiveVlcStream $live)
    {
        parent::__construct($cam, $live, 'lhttp');
    }

    /**
     * @param string $transcode строка transcode{...}:
     * @return string
     */
    protected function getOutputVlm(string $transcode = ''): string
    {
        $liveHost = LIVEHOST;
        //$liveHost = '10.154.28.203';
        //$liveHost = 'localhost';
        $camID = $this->cam->getID();
        $dvrID = $this->cam->getDVR()->getID();
        $path = $this->getPath();
        //$transcode = 'transcode{vcodec=FLV1,vb=4096,fps=25,scale=1,acodec=mp3,samplerate=44100,ab=128}:';
        return "#{$transcode}std{access=livehttp{seglen=5,delsegs=true,numsegs=15,splitanywhere=true,index=$path/stream-$camID.m3u8,index-url=http://$liveHost/lhttp/$dvrID/stream-$camID-########.ts},mux=ts{use-key-frames},dst=$path/stream-$camID-########.ts}";
        //$transcode = 'transcode{acodec=mp3}:';
        //return "#{$transcode}std{access=livehttp{seglen=5,delsegs=true,numsegs=15,index=$path/stream-{$camID}.m3u8,index-url=http://$liveHost/lhttp/{$dvrID}/stream-{$camID}-########.ts},mux=ts{use-key-frames},dst=$path/stream-$camID-########.ts}";
    }

    /**
     * @return string
     */
    protected function getPath(): string
    {
        return Path::getTmpfsPath(Path::LIVE_HTTP . '/' . $this->cam->getDVR()->getUser()->getID());
    }

    public function stop()
    {
        parent::stop();

        $command = "rm -rf {$this->getPath()}/stream-{$this->cam->getID()}";
        $this->log($command);

        //System::getInstance()->addCommand(new BashCommand($command));
        //(new \BashCommand($command))->exec();
    }
}
