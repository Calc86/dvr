<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 26.05.14
 * Time: 13:29
 */

namespace app\modules\vlc\components\ffmpeg;


use app\modules\vlc\components\common\Stream;
use app\modules\vlc\components\interfaces\ICam;

/**
 *
 */
class NginxStream extends Stream
{
    private FFmpeg $ffmpeg;

    /**
     *                       input                          output                                                     name
     * ex: ffmpeg -re -i (udp://@224.0.90.25:1234) (-vcodec copy -acodec mp3 -ar 44100 -f flv rtmp://localhost/myapp)/(stream)
     * @param ICam $cam
     * @param $input
     * @param string $name
     * @param string $output
     */
    function __construct(ICam $cam, $input, string $name = 'stream', string $output = '-c copy -f flv rtmp://localhost/myapp')
    {
        parent::__construct($cam);
        $this->ffmpeg = new FFmpeg($this->cam->getDVR(), "-re -i $input", "$output/$name");
    }

    public function _start()
    {
        $this->ffmpeg->start();
    }

    public function stop()
    {
        parent::stop();

        $this->ffmpeg->stop();
    }


}
