<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 29.03.14
 * Time: 17:06
 */

namespace system2;

/**
 * Class Vlc
 * Используем VLC в качестве dvr
 * @package system2
 */
class ffmpeg extends Daemon{

    /**
     * @var IDVR
     */
    protected $dvr;

    private $input;
    private $output;

    /**
     * @param IDVR $dvr
     * @param string $input
     * @param $output
     * @param string $name
     */
    function __construct(IDVR $dvr, $input, $output, $name = 'ffmpeg')
    {
        $this->dvr = $dvr;
        $this->input = $input;
        $this->output = $output;
        parent::__construct($this->dvr, $name);
    }

    public function _start()
    {
        $ffmpeg = "ffmpeg $this->input $this->output >> {$this->getLogFile()} & ";

        $this->log($ffmpeg);

        (new \BashCommand($ffmpeg))->exec();
    }

    protected function _stop()
    {
        $this->sigTerm();
    }


}
