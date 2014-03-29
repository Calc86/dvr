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
    private $dirs = array(
        //'bin',
        'etc', 'proc', 'rec', 'mtn', 'log', 'img', 'tmp'
    );

    /**
     * @var \FilePath
     */
    private $pidFile;
    /**
     * @var \FilePath
     */
    private $vlmFile;
    /**
     * @var \FilePath
     */
    private $logFile;
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
     */
    function __construct(\UserID $uid)
    {
        parent::__construct($uid);

        $this->setHttpPort(new \Port(HTSTART + $this->getUid()->get()));
        $this->setTelnetPort(new \Port(TLSTART + $this->getUid()->get()));

        $this->setLogFile(new \FilePath(LOG."/{$this->getUid()}/vlc.log"));
        $this->setLogrotateFile(new \FilePath(ETC."/{$this->getUid()}/logrotate.conf"));
        $this->setPidFile(new \FilePath(PROC."/{$this->getUid()}/vlc.pid"));
        $this->setVlmFile(new \FilePath(ETC."/{$this->getUid()}/{$this->getUid()}.vlm"));

        $this->setCams(new MysqlCamCreator($this->getUid()));

        $this->create_user_dirs();
    }

    /**
     * @param \Port $httpPort
     */
    public function setHttpPort(\Port $httpPort)
    {
        $this->httpPort = $httpPort;
    }

    /**
     * @return \Port
     */
    public function getHttpPort()
    {
        return $this->httpPort;
    }

    /**
     * @param \FilePath $logFile
     */
    public function setLogFile(\FilePath $logFile)
    {
        $this->logFile = $logFile;
    }

    /**
     * @return \FilePath
     */
    public function getLogFile()
    {
        return $this->logFile;
    }

    /**
     * @param \FilePath $logrotateFile
     */
    public function setLogrotateFile(\FilePath $logrotateFile)
    {
        $this->logrotateFile = $logrotateFile;
    }

    /**
     * @return \FilePath
     */
    public function getLogrotateFile()
    {
        return $this->logrotateFile;
    }

    /**
     * @param \FilePath $pidFile
     */
    public function setPidFile(\FilePath $pidFile)
    {
        $this->pidFile = $pidFile;
    }

    /**
     * @return \FilePath
     */
    public function getPidFile()
    {
        return $this->pidFile;
    }

    /**
     * @param \Port $telnetPort
     */
    public function setTelnetPort(\Port $telnetPort)
    {
        $this->telnetPort = $telnetPort;
    }

    /**
     * @return \Port
     */
    public function getTelnetPort()
    {
        return $this->telnetPort;
    }

    /**
     * @param \FilePath $vlmFile
     */
    public function setVlmFile(\FilePath $vlmFile)
    {
        $this->vlmFile = $vlmFile;
    }

    /**
     * @return \FilePath
     */
    public function getVlmFile()
    {
        return $this->vlmFile;
    }

    public function start()
    {
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
        foreach($this->getCams() as $cam){
            /** @var Cam $cam */
            $cam->stop();
            $cam->delete();
        }
    }

    /**
     * @return bool
     */
    public function isStarted()
    {
        return false;
    }

    public function kill()
    {
        // TODO: Implement kill() method.
    }

    /**
     * time routine
     * @return void
     */
    public function update()
    {
        // TODO: Implement update() method.
    }

    ////////// VLC Function
    /**
     * примонтировать наш nas
     */
    public function mount(){
        $nas = new \nas();
        $nas->mount();
    }

    /**
     * размонтировать наш nas
     */
    public function un_mount(){
        $nas = new \nas();
        $nas->un_mount();
    }

    public function create_user_dirs() {
        foreach($this->dirs as $dir){
            $path = DIR."/$dir/".$this->getUid();
            if(!is_dir($path)){
                try{
                    mkdir($path, 0775);
                }
                catch (\Exception $e)
                {
                    throw new \PathException($path);
                }
            }
        }
    }

    /**
     * @return bool
     */
    private function start_vlc(){
        $vlc_vlm = '';

        $vlc_ifs = "-I http --http-host ".LIVEHOST." --http-port {$this->getHttpPort()} -I telnet --telnet-port {$this->getTelnetPort()}  --telnet-password ".TLPWD;
        $vlc_logs = "--extraintf=http:logger --file-logging --log-verbose 0 --logfile {$this->getLogFile()}";
        $vlc_shell = VLCBIN." --ffmpeg-hw --http-reconnect --http-continuous --sout-keep ".VLCD." $vlc_ifs  --repeat --loop --network-caching ".VLCNETCACHE." --sout-mux-caching ".VLCSOUTCACHE." $vlc_vlm --pidfile {$this->getPidFile()} $vlc_logs \n";

        if(is_file($this->getPidFile())){
            echo $this->error(__LINE__, "VLC для пользователя {$this->getUid()} уже запущен или мертв");
            return false;
        }
        echo $vlc_shell;
        (new \BashCommand($vlc_shell))->exec();
        $this->wait_for_unix_proc_start();
        return true;
    }

    /**
     * @param $line
     * @param $text
     * @return string
     */
    private function error($line,$text) {
        return 'ERROR: ('.__FILE__.' line:'.$line.') '.$text."\n";
    }

    private function wait_for_unix_proc_start(){
        sleep(1);
    }
} 