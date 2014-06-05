<?php

namespace system2;

/**
 * Created by PhpStorm.
 * User: calc
 * Date: 07.04.14
 * Time: 17:42
 */

abstract class Daemon {

    /**
     * @var string Daemon name
     */
    private $name;

    private $dvr;

    private $pidFile;
    private $configFile;
    private $logFile;
    private $logrotateFile;
    private $valgrindFile;  //memory leak

    /**
     * @var bool
     */
    private $valgrind = false;

    /**
     * @param IDVR $dvr
     * @param string $name daemon name
     */
    function __construct(IDVR $dvr, $name)
    {
        $this->dvr = $dvr;
        $this->name = $name;

        $this->log(__FUNCTION__);

        $this->setLogFile(Path::getLocalPath(Path::LOG."/{$this->dvr->getID()}")."/{$this->getName()}.log");

        $this->setConfigFile(Path::getLocalPath(Path::ETC."/{$this->dvr->getID()}")."/{$this->getName()}.conf");

        $this->setPidFile(Path::getLocalPath(Path::PROCESS."/{$this->dvr->getID()}")."/{$this->getName()}.pid");

        $this->setLogrotateFile(Path::getLocalPath(Path::ETC."/{$this->dvr->getID()}")."/{$this->getName()}.conf");

        $this->setValgrindFile(Path::getLocalPath(Path::LOG."/{$this->dvr->getID()}")."/{$this->getName()}.valgrind");
    }

    /**
     * @return int proc
     */
    private function getProcess() {
        //$ps = "ps -aef | grep /proc/{$this->dvr->getID()}/{$this->getName()} | grep -v grep | awk ' {print $2} '";
        //$ps = "ps -aef | grep ".Path::getProcPath()."/{$this->dvr->getID()}/{$this->getName()} | grep -v grep | awk ' {print $2} '";
        $ps = "ps -aef | grep ".$this->pidFile." | grep -v grep | awk ' {print $2} '";
        $proc = (int)shell_exec($ps);
        return $proc;
    }

    /**
     * @param $configFile
     */
    private function setConfigFile($configFile)
    {
        $this->configFile = $configFile;
    }

    public function getConfigFile()
    {
        return $this->configFile;
    }

    /**
     * @param $logFile
     */
    private function setLogFile($logFile)
    {
        $this->logFile = $logFile;
    }

    private function getLogrotateFile()
    {
        return $this->logrotateFile;
    }

    /**
     * @param $logrotateFile
     */
    private function setLogrotateFile($logrotateFile)
    {
        $this->logrotateFile = $logrotateFile;
    }

    public function getLogFile()
    {
        return $this->logFile;
    }

    /**
     * @param $name
     */
    /*public function setName($name)
    {
        $this->name = $name;
    }*/

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $valgrindFile
     */
    private function setValgrindFile($valgrindFile)
    {
        $this->valgrindFile = $valgrindFile;
    }

    /**
     * @return mixed
     */
    public function getValgrindFile()
    {
        return $this->valgrindFile;
    }

    /**
     * @param $pidFile
     */
    private function setPidFile($pidFile)
    {
        $this->pidFile = $pidFile;
    }

    public function getPidFile()
    {
        return $this->pidFile;
    }


    public function setValgrind()
    {
        $this->valgrind = true;
    }

    public function resetValgrind()
    {
        $this->valgrind = false;
    }

    /**
     * @return boolean
     */
    public function isValgrind()
    {
        return $this->valgrind;
    }

    final public function start(){
        if($this->isStarted()){
            $this->log($this->getName()." для пользователя {$this->dvr->getID()} уже запущен или мертв", __CLASS__);

            return;
        }

        $this->log($this->getCommand());
        (new \BashCommand($this->getCommand()))->exec();

        $this->wait_for_unix_proc_start();
    }

    /**
     * @return string Bash command
     */
    abstract protected function getCommand();

    //abstract protected function _start();

    final public function stop(){
        $this->log(__FUNCTION__);

        if(!$this->isStarted()){
            $this->log($this->getName()." not started", __CLASS__);
            return;
        }

        $this->_stop();

        //wait for stop
        while($this->isStarted()){
            sleep(1);
        }
    }

    protected function _stop(){
        $this->sigTerm();
    }

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

    public function sigTerm(){
        $pid = `cat {$this->getPidFile()}`;
        if($pid != 0 && $pid != '')
            (new \BashCommand("kill -INT $pid"))->exec();
        $pid = $this->getProcess();
        if($pid != 0 && $pid != '')
            (new \BashCommand("kill -INT $pid"))->exec();
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

    /*protected function error($line, $text) {
        return 'ERROR: ('.__FILE__.' line:'.$line.') '.$text."\n";
    }*/


    public function startup(){
        $this->log(__FUNCTION__);
        $this->shutdown();
        $this->start();
    }

    public function shutdown(){
        $this->log(__FUNCTION__);

        $this->stop();
        $this->kill();

        //удаляем логфайл
        if(file_exists($this->logFile))
            unlink($this->logFile);
    }

    protected  function wait_for_unix_proc_start(){
        sleep(1);
    }

    /**
     * @param $message
     */
    public function log($message)
    {
        Log::getInstance($this->dvr->getID())->put($message, __CLASS__."({$this->getName()})");
    }
}

/**
 * Class DaemonException
 * @package system2
 */
class DaemonException extends \Exception{

}
