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
     * @var Motion
     */
    private $motion;

    /**
     * @param \UserID $uid
     */
    function __construct(\UserID $uid)
    {
        parent::__construct($uid);

        $this->setHttpPort(new \Port(HTSTART + $this->getUid()->get()));
        $this->setTelnetPort(new \Port(TLSTART + $this->getUid()->get()));
        $this->setLogrotateFile(new \FilePath(ETC."/{$this->getUid()}/logrotate.conf"));
        $this->setCams(new MysqlCamCreator($this->getUid()));

        $this->motion = new Motion($this->getUid());
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
        $this->mount();
        if(!$this->start_vlc())
            return;

        foreach($this->getCams() as $cam){
            /** @var Cam $cam */
            $cam->create();
            $cam->start();

            $camMotion = $cam->getCamMotion();
            if($camMotion != null ) $this->motion->addThread($camMotion);
        }

        $this->motion->start();
    }

    public function stop()
    {
        $this->motion->stop();

        if(!$this->isStarted()) return;

        foreach($this->getCams() as $cam){
            /** @var Cam $cam */
            $cam->stop();
            $cam->delete();
        }

        $telnet = new \telnet();

        $f = $telnet->connect('localhost', $this->getTelnetPort()->get());
        if(!$f){
            echo "Порт закрыт \n";
        }else
        {
            echo "Успешное подключение \n";
            $telnet->auth(TLPWD);
            $telnet->write('shutdown');
            echo $telnet->read();
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
        $vlc_logs = "--extraintf=http:logger --file-logging --log-verbose 0 --logfile {$this->getLogFile()}";
        $vlc_shell = VLCBIN." --ffmpeg-hw --http-reconnect --http-continuous --sout-keep ".VLCD." $vlc_ifs  --repeat --loop --network-caching ".VLCNETCACHE." --sout-mux-caching ".VLCSOUTCACHE." $vlc_vlm --pidfile {$this->getPidFile()} $vlc_logs \n";

        if($this->isStarted()){
            echo $this->error(__LINE__, "VLC для пользователя {$this->getUid()} уже запущен или мертв");
            return false;
        }
        echo $vlc_shell;
        (new \BashCommand($vlc_shell))->exec();
        $this->wait_for_unix_proc_start();
        return true;
    }



    private function wait_for_unix_proc_start(){
        sleep(1);
    }
} 