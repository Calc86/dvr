<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 29.03.14
 * Time: 17:06
 */

namespace system;

/**
 * Class Vlc
 * Используем VLC в качестве dvr
 * @package system
 */
class Vlc extends DVR{
    /**
     * @var \FilePath
     */
    private $logrotateFile;

    /**
     * @var \Port
     */
    private $httpPort;
    /**
     * @var \Port
     */
    private $telnetPort;

    /**
     * @param \UserID $uid
     * @param CamCreator $camCreator
     */
    function __construct(\UserID $uid, CamCreator $camCreator)
    {
        parent::__construct($uid);

        $this->setHttpPort(new \Port(HTSTART + $this->getUid()->get()));
        $this->setTelnetPort(new \Port(TLSTART + $this->getUid()->get()));
        $this->setLogrotateFile(new \FilePath(ETC."/{$this->getUid()}/logrotate.conf"));
        $this->setCams($camCreator);
    }

    /**
     * @param \Port $httpPort
     */
    private function setHttpPort(\Port $httpPort)
    {
        $this->httpPort = $httpPort;
    }

    /**
     * @return \Port
     */
    private function getHttpPort()
    {
        return $this->httpPort;
    }

    /**
     * @param \FilePath $logrotateFile
     */
    private function setLogrotateFile(\FilePath $logrotateFile)
    {
        $this->logrotateFile = $logrotateFile;
    }

    /**
     * @return \FilePath
     */
    /** @noinspection PhpUnusedPrivateMethodInspection */
    private function getLogrotateFile()
    {
        return $this->logrotateFile;
    }

    /**
     * @param \Port $telnetPort
     */
    private function setTelnetPort(\Port $telnetPort)
    {
        $this->telnetPort = $telnetPort;
    }

    /**
     * @return \Port
     */
    private function getTelnetPort()
    {
        return $this->telnetPort;
    }

    public function start()
    {
        Log::getInstance()->put(__FUNCTION__, __CLASS__);
        $this->mount();
        if(!$this->start_vlc())
            return;

        foreach($this->getCams() as $cam){
            /** @var Cam $cam */
            $cam->create();
            $cam->start();
        }
    }

    public function stop()
    {
        Log::getInstance()->put(__FUNCTION__, __CLASS__);
        if(!$this->isStarted()){
            Log::getInstance()->put($this->getName()." not started", __CLASS__);
            return;
        }


        foreach($this->getCams() as $cam){
            /** @var Cam $cam */
            $cam->stop();
            $cam->delete();
        }

        $telnet = new \telnet();

        $f = $telnet->connect('localhost', $this->getTelnetPort()->get());
        if(!$f){
            Log::getInstance()->put("Порт закрыт", __CLASS__);
        }else
        {
            Log::getInstance()->put("Успешное подключение", __CLASS__);
            $telnet->auth(TLPWD);
            $telnet->write('shutdown');
            Log::getInstance()->put($telnet->read(), __CLASS__);
        }
        while($this->isStarted()){
            sleep(1);
        }
    }

    ////////// VLC Function
    /**
     * примонтировать наш nas
     */
    private function mount(){
        $nas = new \nas();
        if(!$nas->is_mount()->get());
            $nas->mount();
    }

    /**
     * размонтировать наш nas
     */
    /** @noinspection PhpUnusedPrivateMethodInspection */
    private function un_mount(){
        $nas = new \nas();
        if($nas->is_mount()->get());
            $nas->un_mount();
    }

    /**
     * @return boolean
     */
    private function start_vlc(){
        $vlc_vlm = '';

        $vlc_ifs = "-I http --http-host ".LIVEHOST." --http-port {$this->getHttpPort()} -I telnet --telnet-port {$this->getTelnetPort()}  --telnet-password ".TLPWD;
        if(VLC_USE_LOG)
            $vlc_logs = "--extraintf=http:logger --file-logging --log-verbose 0 --logfile {$this->getLogFile()}";
        else
            $vlc_logs = '--extraintf=http';
        $vlc_shell = VLCBIN." --rtsp-tcp --ffmpeg-hw --http-reconnect --http-continuous --sout-keep ".VLCD." $vlc_ifs  --repeat --loop --network-caching ".VLCNETCACHE." --sout-mux-caching ".VLCSOUTCACHE." $vlc_vlm --pidfile {$this->getPidFile()} $vlc_logs \n";
        $vlc_shell = VLCBIN." --rtsp-tcp --ffmpeg-hw ".VLCD." $vlc_ifs --repeat --loop --network-caching ".VLCNETCACHE." --sout-mux-caching ".VLCSOUTCACHE."  --sout-ts-dts-delay 400 $vlc_vlm --pidfile {$this->getPidFile()} $vlc_logs \n";

        if($this->isStarted()){
            Log::getInstance()->put($this->error(__LINE__, $this->getName()." для пользователя {$this->getUid()} уже запущен или мертв"), __CLASS__);

            return false;
        }
        Log::getInstance()->put($vlc_shell, __CLASS__);

        (new \BashCommand($vlc_shell))->exec();
        $this->wait_for_unix_proc_start();
        return true;
    }

    private function wait_for_unix_proc_start(){
        sleep(1);
    }
}
