<?php

namespace app\modules\dvr\components\vlc2;

use app\modules\dvr\components\common\DaemonConfig;

/**
 * 20211023
 */
class Config extends DaemonConfig
{
    /**
     * @var int Http start port
     * old HTSTART
     */
    public int $httpPort = 8100;

    /**
     * @var int Telnet port start
     * old TLSTART
     */
    public int $telnetPort = 44300;

    /**
     * @var int Stream port start, old VLC_STREAM_PORT_START
     */
    public int $streamPort = 9000;

    /**
     * @var int VLC_L_FLV_PORT_START
     */
    public int $flvPort = 11000;

    /**
     * @var int VLC_RE_FLV_PORT_START
     */
    public int $rePort = 13000;

    /**
     * @var string Old TLPWD
     */
    public string $telnetPassword = 'qwerty';

    /**
     * @var bool Use logging, old VLC_USE_LOG
     */
    public bool $useLog = true;

    /**
     * @var string Full path to vlc, old VLCBIN
     */
    public string $vlcPath = '/usr/bin/cvlc -vvv'; //'/usr/bin/vlc';

    /**
     * @var string old VLCD
     */
    public string $daemonOpts = '-d';

    /**
     * @var int ms HLS cache, old VLC_LIVE_CACHE
     */
    public int $liveCache = 500;

    /**
     * @var int ms Network cache, old VLCNETCACHE
     */
    public int $netCache = 500;

    /**
     * @var int ms source out cache, muxer cache, old VLCSOUTCACHE
     */
    public int $soutCache = 500;

    /**
     * @var bool enable hardware decoding accelerating
     * https://wiki.videolan.org/VLC_VAAPI/
     */
    public bool $withFFmpegHw = false;

    /**
     * @var string Interface for streaming
     */
    public string $host = /*localhost';*/ '0.0.0.0';

    /**
     * @var int --log-verbose 0
     */
    public int $verbose = 0;

    /**
     * @var int  --sout-ts-dts-delay=<integer>
     * DTS delay (ms)
     * Delay the DTS (decoding time stamps) and PTS (presentation
     * timestamps) of the data in the stream, compared to the PCRs. This
     * allows for some buffering inside the client decoder.
     */
    public int $dtsDelay = 400; // оставим как и было
}
