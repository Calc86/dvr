<?php

namespace app\modules\vlc\components\vlc;

use app\modules\vlc\components\types\IP;
use app\modules\vlc\components\types\Port;
use app\modules\vlc\components\types\Url;
use app\modules\vlc\components\types\VLMCommand;
use app\modules\vlc\components\types\YesNo;
use Exception;

/**
 *
 */
class VlcHttp
{
    /**
     * @var YesNo
     */
    protected $debug;
    /**
     * @var string
     */
    protected $msg;
    /**
     * @var IP
     */
    protected $ip;
    /**
     * @var Port
     */
    protected $port;
    /**
     * @var Url
     */
    protected $url;
    /**
     * @var Url
     */
    protected $full_url;

    /**
     * @param Port $port
     * @param Url $url
     */
    public function __construct(Port $port, Url $url)
    {
        $this->ip = LIVEHOST;
        $this->port = $port;
        $this->set_url($url);
        //$this->full_url();
        //print_r($this);
    }

    /**
     * @param Url $url
     */
    protected function set_url(Url $url)
    {
        $this->url = $url;
        $this->full_url();
    }

    /**
     *
     */
    protected function full_url()
    {
        $this->full_url = new Url("http://$this->ip:$this->port/$this->url");
    }

    /**
     * @param VLMCommand $cmd
     */
    protected function cmd(VLMCommand $cmd)
    {
        $this->msg = '';
        $path = $this->full_url . rawurlencode(trim($cmd));
        if ($this->debug) echo $path;

        try {
            $f = fopen($path, "r");
            if ($f) {
                while (($buf = fread($f, 1024)) != 0) { // todo 20211022 file_get_content
                    $this->msg .= $buf;
                }
                fclose($f);
            }
        } catch (Exception $e) {
            echo $e->getMessage() . "\n";
            echo $e->getFile() . " " . $e->getLine() . "\n";
        }
    }
}