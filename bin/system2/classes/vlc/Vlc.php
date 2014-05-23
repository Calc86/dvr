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
class Vlc extends Daemon{

    /**
     * @var IDVR
     */
    protected $dvr;

    private $httpPort;
    private $telnetPort;

    /**
     * @param IDVR $dvr
     */
    function __construct(IDVR $dvr)
    {
        $this->dvr = $dvr;
        parent::__construct($this->dvr, 'vlc');

        //TODO: delete magic constants
        $this->setHttpPort(HTSTART + $this->dvr->getID());
        $this->setTelnetPort(TLSTART + $this->dvr->getID());
    }

    /**
     * @param $port
     */
    private function setHttpPort($port)
    {
        $this->httpPort = $port;
    }

    private function getHttpPort()
    {
        return $this->httpPort;
    }

    /**
     * @param $port
     */
    private function setTelnetPort($port)
    {
        $this->telnetPort = $port;
    }

    private function getTelnetPort()
    {
        return $this->telnetPort;
    }

    public function _start()
    {
        $vlc_vlm = '';

        //$vlc_ifs = "-I http --http-host ".LIVEHOST." --http-port {$this->getHttpPort()} -I telnet --telnet-port {$this->getTelnetPort()}  --telnet-password ".TLPWD;
        $vlc_ifs = "-I http --http-port {$this->getHttpPort()} -I telnet --telnet-port {$this->getTelnetPort()}  --telnet-password ".TLPWD;
        if(VLC_USE_LOG)
            $vlc_logs = "--extraintf=http:logger --file-logging --log-verbose 0 --logfile {$this->getLogFile()}";
        else
            $vlc_logs = '--extraintf=http';
        //$vlc_shell = VLCBIN." --rtsp-tcp --ffmpeg-hw --http-reconnect --http-continuous --sout-keep ".VLCD." $vlc_ifs  --repeat --loop --network-caching ".VLCNETCACHE." --sout-mux-caching ".VLCSOUTCACHE." $vlc_vlm --pidfile {$this->getPidFile()} $vlc_logs \n";
        $vlc_shell = VLCBIN." --rtsp-tcp --ffmpeg-hw ".VLCD." $vlc_ifs --repeat --loop --live-caching ".VLC_LIVE_CACHE." --network-caching ".VLCNETCACHE." --sout-mux-caching ".VLCSOUTCACHE."  --sout-ts-dts-delay 400 $vlc_vlm --pidfile {$this->getPidFile()} $vlc_logs \n";

        $this->log($vlc_shell);

        (new \BashCommand($vlc_shell))->exec();
    }

    public function _stop()
    {
        $telnet = new \telnet();

        $f = $telnet->connect('localhost', $this->getTelnetPort());
        if(!$f){
            $this->log("Порт закрыт");
        }else
        {
            $this->log("Успешное подключение");
            $telnet->auth(TLPWD);
            $telnet->write('shutdown');
            $this->log($telnet->read());
        }
    }

    ////////// VLC Function
    /**
     * примонтировать наш nas
     */
    /*private function mount(){
        $nas = new \nas();
        if(!$nas->is_mount()->get());
            $nas->mount();
    }*/

    /**
     * размонтировать наш nas
     */
    /** @noinspection PhpUnusedPrivateMethodInspection */
    /*private function un_mount(){
        $nas = new \nas();
        if($nas->is_mount()->get());
            $nas->un_mount();
    }*/
}
