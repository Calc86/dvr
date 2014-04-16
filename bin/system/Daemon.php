<?php

namespace system;

/**
 * Created by PhpStorm.
 * User: calc
 * Date: 07.04.14
 * Time: 17:42
 */

abstract class Daemon {
    private $dirs = array(
        //'bin',
        'etc', 'proc', 'rec', 'pre_rec', 'mtn', 'log', 'img', 'tmp', 'lhttp'
    );
    /**
     * @var String Daemon name
     */
    private $name;

    /**
     * @var \UserID
     */
    private $uid;
    private $pidFile;
    private $configFile;
    private $logFile;

    /**
     * @param \UserID $uid
     * @param $name
     */
    function __construct(\UserID $uid, $name)
    {
        $this->uid = $uid;
        $this->name = $name;
        $this->setLogFile(new \FilePath(LOG."/{$this->getUid()}/{$this->getName()}.log"));
        $this->setConfigFile(new \FilePath(ETC."/{$this->getUid()}/{$this->getName()}.conf"));
        $this->setPidFile(new \FilePath(PROC."/{$this->getUid()}/{$this->getName()}.pid"));

        $this->createUserDirs();
    }

    private function createUserDirs() {
        foreach($this->dirs as $dir){
            $path = DIR."/$dir/";
            if(!is_dir($path)){
                mkdir($path, 0775);
            }
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
     * @return int proc
     */
    private function getProcess() {
        $ps = "ps -aef | grep /proc/{$this->getUid()}/{$this->getName()} | grep -v grep | awk ' {print $2} '";
        $proc = (int)shell_exec($ps);
        return $proc;
    }

    /**
     * @return \UserID
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * @param \FilePath $configFile
     */
    public function setConfigFile(\FilePath $configFile)
    {
        $this->configFile = $configFile;
    }

    /**
     * @return \FilePath
     */
    public function getConfigFile()
    {
        return $this->configFile;
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
     * @param String $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return String
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param \FilePath $pidFile
     */
    public function setPidFile(\FilePath $pidFile)
    {
        $this->pidFile = $pidFile;
    }

    /**
     * @return mixed
     */
    public function getPidFile()
    {
        return $this->pidFile;
    }

    public abstract function start();
    public abstract function stop();

    public function restart(){
        if($this->isStarted()) $this->stop();
        $this->start();
    }

    public function kill(){
        $pid = `cat {$this->getPidFile()}`;
        if($pid != 0 && $pid != '')
            (new \BashCommand("kill $pid"))->exec();
        $pid = $this->getProcess();
        if($pid != 0 && $pid != '')
            (new \BashCommand("kill $pid"))->exec();
        if(is_file($this->getPidFile())) unlink($this->getPidFile());
    }

    /**
     * @return boolean
     */
    public function isStarted(){
        /*if(file_exists($this->getPidFile()))
            return true;*/
        if($this->getProcess())
            return true;
        return false;
    }

    /**
     * @param $line
     * @param $text
     * @return string
     */
    protected function error($line, $text) {
        return 'ERROR: ('.__FILE__.' line:'.$line.') '.$text."\n";
    }


    public function startup(){
        $this->shutdown();
        $this->start();
    }

    public function shutdown(){
        $this->stop();
        $this->kill();
    }
} 