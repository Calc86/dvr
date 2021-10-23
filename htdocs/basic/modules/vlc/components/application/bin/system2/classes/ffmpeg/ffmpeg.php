<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 29.03.14
 * Time: 17:06
 */

namespace system2;

use app\modules\vlc\components\IDVR;

/**
 * Class Vlc
 * Используем VLC в качестве dvr
 * @package system2
 */
class ffmpeg extends Daemon
{

    /**
     * @var IDVR
     */
    protected IDVR $dvr;

    private string $input;
    private $output;

    /**
     * @param IDVR $dvr
     * @param string $input
     * @param $output
     * @param string $name
     */
    function __construct(IDVR $dvr, $input, $output, string $name = 'ffmpeg')
    {
        $this->dvr = $dvr;
        $this->input = $input;
        $this->output = $output;
        parent::__construct($this->dvr, $name);
    }

    /**
     * @return string
     */
    protected function getCommand(): string
    {
        $ffmpeg = "ffmpeg $this->input $this->output >> {$this->getLogFile()} & ";

        return $ffmpeg;
    }

    /*protected function _stop()
    {
        $this->sigTerm();
    }*/


}
