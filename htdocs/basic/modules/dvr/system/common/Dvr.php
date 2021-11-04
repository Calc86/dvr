<?php

namespace dvr\system\common;

use yii\base\Model;

/**
 * @property-read string $ramFS
 * @property-read string $local
 * @property-read string $nfs
 * @property-read string $tmp
 * @property-read string $proc
 * @property-read string $log
 *
 * @property-read System $system
 * @property-read string $name
 */
abstract class Dvr extends Model implements IPath
{
    protected const VALGRIND = '{valgrind} -v --trace-children=yes --log-file={log} --error-limit=no --leak-check=full {command}';

    protected System $system;
    protected bool $useRam = false;
    protected string $host = '0.0.0.0';
    protected int $port = 8101;
    /**
     * @var array Статическая переменная нужна для того, чтобы правильно считать порты на одном устройстве
     */
    protected static array $ports = [];

    protected bool $valgrind = false;

    public function __construct(System $system)
    {
        $this->system = $system;
        parent::__construct();
    }

    /**
     * @var Source[]
     */
    protected array $sources;
    /**
     * @var Output[] name->value map
     */
    protected array $outputs;

    protected function getName(): string
    {
        return 'dvr';
    }

    public function getSystem(): System
    {
        return $this->system;
    }

    public function getRamFS(): string
    {
        return $this->system->ramFS . DIRECTORY_SEPARATOR . $this->name;
    }

    public function getLocal(): string
    {
        return $this->system->local . DIRECTORY_SEPARATOR . $this->name;
    }

    public function getNfs(): string
    {
        return $this->system->nfs . DIRECTORY_SEPARATOR . $this->name;
    }

    public function getTmp(): string
    {
        return $this->system->tmp . DIRECTORY_SEPARATOR . $this->name;
    }

    public function getProc(): string
    {
        return $this->system->proc . DIRECTORY_SEPARATOR . $this->name;
    }

    public function getLog(): string
    {
        return $this->system->log . DIRECTORY_SEPARATOR . $this->name;
    }

    abstract public function createSource(string $name, string $uri, ?Auth $auth = null): Source;

    abstract public function createOutputs(): void;

    protected function addPort(int $port): int
    {
        self::$ports[] = $port;
        return $port;
    }

    public function requestPort(): int
    {
        if(empty(self::$ports)) return $this->addPort($this->port);
        return $this->addPort(max(self::$ports) + 1);
    }

    public function start()
    {
        foreach ($this->sources as $source) {
            $source->create();
            $source->start();
        }
    }

    public function stop()
    {
        foreach ($this->sources as $source) {
            $source->stop();
            $source->delete();
        }
    }

    public function status()
    {

    }
}