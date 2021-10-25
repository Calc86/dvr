<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 29.03.14
 * Time: 17:06
 */

namespace app\modules\dvr\components\ffmpeg;

use app\modules\dvr\components\common\Daemon;
use app\modules\dvr\components\interfaces\IDVR;

/**
 *
 */
class FFmpeg extends Daemon
{
    /**
     * @var IDVR
     */
    protected IDVR $dvr;

    private string $input;
    private string $output;

    /**
     * @param IDVR $dvr
     * @param string $input
     * @param string $output
     * @param string $name
     */
    function __construct(IDVR $dvr, string $input, string $output, string $name = 'ffmpeg')
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
        return "ffmpeg $this->input $this->output >> {$this->getLogFile()} & ";
    }

    /*protected function _stop()
    {
        $this->sigTerm();
    }*/


}
