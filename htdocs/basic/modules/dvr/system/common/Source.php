<?php

namespace dvr\system\common;

use yii\base\Model;

/**
 * @property-read $uri
 */
abstract class Source extends Model
{
    public string $name;
    protected string $uri;
    protected ?Auth $auth = null;

    public function __construct($name, $uri, array $config = [])
    {
        $this->name = $name;
        $this->uri = $uri;

        parent::__construct($config);
    }

    public function getUri(): string
    {
        return $this->uri;
    }

    abstract public function stop(): void;

    abstract public function start(): void;

    abstract function delete(): void;

    abstract function create(): void;

    abstract function check(): void;
}
