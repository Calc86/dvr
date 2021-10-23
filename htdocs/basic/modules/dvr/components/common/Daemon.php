<?php

namespace app\modules\dvr\components\common;

use app\modules\dvr\components\exceptions\CommandException;
use app\modules\dvr\components\exceptions\StringException;
use app\modules\dvr\components\interfaces\IDVR;
use app\modules\dvr\components\types\BashCommand;

/**
 * Created by PhpStorm.
 * User: calc
 * Date: 07.04.14
 * Time: 17:42
 */
abstract class Daemon
{

    /**
     * @var string Daemon name
     */
    private string $name;

    private IDVR $dvr;

    /**
     * @return IDVR
     */
    public function getDvr(): IDVR
    {
        return $this->dvr;
    }

    private $pidFile;
    private $configFile;
    private $logFile;
    private string $logrotateFile;
    private $valgrindFile;  //memory leak

    /**
     * @var bool
     */
    private bool $valgrind = false;

    /**
     * @param IDVR $dvr
     * @param string $name daemon name
     * @param DaemonConfig|null $config
     */
    function __construct(IDVR $dvr, string $name = 'daemon', ?DaemonConfig $config = null)
    {
        $this->dvr = $dvr;
        $this->name = $name;

        $this->log(__FUNCTION__);

        // todo 20211023 move to daemon config all log sile settings
        $this->setLogFile(Path::getLocalPath(Path::LOG . "/{$this->dvr->getID()}") . "/{$this->getName()}.log");

        $this->setConfigFile(Path::getLocalPath(Path::ETC . "/{$this->dvr->getID()}") . "/{$this->getName()}.conf");

        $this->setPidFile(Path::getLocalPath(Path::PROCESS . "/{$this->dvr->getID()}") . "/{$this->getName()}.pid");

        $this->setLogrotateFile(Path::getLocalPath(Path::ETC . "/{$this->dvr->getID()}") . "/{$this->getName()}.conf");

        $this->setValgrindFile(Path::getLocalPath(Path::LOG . "/{$this->dvr->getID()}") . "/{$this->getName()}.valgrind");
    }

    /**
     * @return int proc
     */
    private function getProcess(): int
    {
        //$ps = "ps -aef | grep /proc/{$this->dvr->getID()}/{$this->getName()} | grep -v grep | awk ' {print $2} '";
        //$ps = "ps -aef | grep ".Path::getProcPath()."/{$this->dvr->getID()}/{$this->getName()} | grep -v grep | awk ' {print $2} '";
        $ps = "ps -aef | grep " . $this->pidFile . " | grep -v grep | awk ' {print $2} '";
        return (int)shell_exec($ps);
    }

    /**
     * @param $configFile
     */
    private function setConfigFile($configFile)
    {
        $this->configFile = $configFile;
    }

    /**
     * @return mixed
     */
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

    /**
     * @return string
     */
    private function getLogrotateFile(): string
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

    /**
     * @return mixed
     */
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
    public function getName(): string
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

    /**
     * @return mixed
     */
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
    public function isValgrind(): bool
    {
        return $this->valgrind;
    }

    /**
     * @throws CommandException
     * @throws StringException
     */
    final public function start()
    {
        if ($this->isStarted()) {
            $this->log($this->getName() . " для пользователя {$this->dvr->getID()} уже запущен или мертв", __CLASS__);

            return;
        }

        $this->log($this->getCommand());
        (new BashCommand($this->getCommand()))->exec();

        $this->wait_for_unix_proc_start();
    }

    /**
     * @return string Bash command
     */
    abstract protected function getCommand(): string;

    //abstract protected function _start();

    /**
     * @throws StringException
     */
    final public function stop()
    {
        $this->log(__FUNCTION__);

        if (!$this->isStarted()) {
            $this->log($this->getName() . " not started", __CLASS__);
            return;
        }

        $this->_stop();

        //wait for stop
        while ($this->isStarted()) {
            sleep(1);
        }
    }

    /**
     * @throws StringException
     */
    protected function _stop()
    {
        $this->sigTerm();
    }

    /**
     * @throws StringException
     * @throws CommandException
     */
    public function restart()
    {
        if ($this->isStarted()) $this->stop();
        $this->start();
    }

    /**
     * @throws StringException
     */
    public function kill()
    {
        $pid = `cat {$this->getPidFile()}`;
        if (!empty($pid))
            (new BashCommand("kill $pid"))->exec();
        $pid = $this->getProcess();
        if (!empty($pid))
            (new BashCommand("kill $pid"))->exec();
        if (is_file($this->getPidFile())) unlink($this->getPidFile());
    }

    /**
     * @throws StringException
     */
    public function sigTerm()
    {
        $pid = `cat {$this->getPidFile()}`;
        if (!empty($pid))
            (new BashCommand("kill -INT $pid"))->exec();
        $pid = $this->getProcess();
        if (!empty($pid))
            (new BashCommand("kill -INT $pid"))->exec();
        if (is_file($this->getPidFile())) unlink($this->getPidFile());
    }

    /**
     * @return boolean
     */
    public function isStarted(): bool
    {
        /*if(file_exists($this->getPidFile()))
            return true;*/
        if ($this->getProcess())
            return true;
        return false;
    }

    /*protected function error($line, $text) {
        return 'ERROR: ('.__FILE__.' line:'.$line.') '.$text."\n";
    }*/


    /**
     * @throws StringException
     * @throws CommandException
     */
    public function startup()
    {
        $this->log(__FUNCTION__);
        $this->shutdown();
        $this->start();
    }

    /**
     * @throws StringException
     */
    public function shutdown()
    {
        $this->log(__FUNCTION__);

        $this->stop();
        $this->kill();

        //удаляем logfile
        if (file_exists($this->logFile))
            unlink($this->logFile);
    }

    protected function wait_for_unix_proc_start()
    {
        sleep(1);
    }

    /**
     * @param string $message
     * @param string|null $module
     */
    public function log(string $message, string $module = null)
    {
        Log::getInstance($this->dvr->getID())->put($message, $module ?? __CLASS__ . "({$this->getName()})");
    }

    protected function applyParams(array $params, string $command): string {
        $keys = array_values($params);
        $search = [];
        foreach ($keys as $item)
            $search[] = '{'.$item.'}';

        $replace = array_keys($params);
        return str_replace($search, $replace, $command);
    }
}
