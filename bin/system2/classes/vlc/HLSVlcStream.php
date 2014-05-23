<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 14.05.14
 * Time: 19:03
 */

namespace system2;

/**
 * http live streaming from vlc
 * Class HLSVlcStream
 * @package system2
 */
class HLSVlcStream extends VlcReStream {
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
    protected function getOutputVlm($transcode = '')
    {
        //$liveHost = LIVEHOST;
        $liveHost = 'localhost';
        $camID = $this->cam->getID();
        $dvrID = $this->cam->getDVR()->getID();
        $path = $this->getPath();
        return "#{$transcode}std{access=livehttp{seglen=5,delsegs=true,numsegs=15,splitanywhere=true,index=$path/stream-{$camID}.m3u8,index-url=http://$liveHost/lhttp/{$dvrID}/stream-{$camID}-########.ts},mux=ts{use-key-frames},dst=$path/stream-$camID-########.ts}";
    }

    /**
     * @return string
     */
    protected function getPath(){
        return Path::getTmpfsPath(Path::LIVE_HTTP.'/'.$this->cam->getDVR()->getID());
    }

    public function stop()
    {
        parent::stop();

        $command = "rm -rf {$this->getPath()}";
        $this->log($command);
        //(new \BashCommand($command))->exec();
    }
}
