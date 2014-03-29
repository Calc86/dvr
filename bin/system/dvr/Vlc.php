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
        $this->setVlmFile(new \FilePath(ETC."/{$this->getUid()}/config.vlm"));

        $this->setCams(new MysqlCamCreator($this->getUid()));

        $this->create_user_dirs();
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
     * @param \FilePath $logFile
     */
    private function setLogFile(\FilePath $logFile)
    {
        $this->logFile = $logFile;
    }

    /**
     * @return \FilePath
     */
    private function getLogFile()
    {
        return $this->logFile;
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
    private function getLogrotateFile()
    {
        return $this->logrotateFile;
    }

    /**
     * @param \FilePath $pidFile
     */
    private function setPidFile(\FilePath $pidFile)
    {
        $this->pidFile = $pidFile;
    }

    /**
     * @return \FilePath
     */
    private function getPidFile()
    {
        return $this->pidFile;
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

    /**
     * @param \FilePath $vlmFile
     */
    private function setVlmFile(\FilePath $vlmFile)
    {
        $this->vlmFile = $vlmFile;
    }

    /**
     * @return \FilePath
     */
    private function getVlmFile()
    {
        return $this->vlmFile;
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
        }
    }

    public function stop()
    {
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

    /**
     * @return bool
     */
    public function isStarted()
    {
        // TODO проверять на открытость портов и возвращать результат (телнет и хттп)
        return false;
    }

    public function kill()
    {
        $pid = `cat {$this->getPidFile()}`;
        if($pid != 0 && $pid != '')
            (new \BashCommand("kill $pid"))->exec();
        $pid = $this->getProcess();
        if($pid != 0 && $pid != '')
            (new \BashCommand("kill $pid"))->exec();
        if(is_file($this->getPidFile())) unlink($this->getPidFile());
    }

    /**
     * @return int proc
     */
    private function getProcess() {
        $ps = "ps -aef | grep vlc | grep /proc/{$this->getUid()} | grep -v grep | awk ' {print $2} '";
        $proc = (int)shell_exec($ps);
        return $proc;
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
    private function un_mount(){
        $nas = new \nas();
        if($nas->is_mount()->get());
            $nas->un_mount();
    }

    private function create_user_dirs() {
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