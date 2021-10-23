<?php

namespace app\modules\dvr\components\types;

/**
 * Какой-то красивый класс для преобразований
 */
abstract class Type
{

    /**
     * @var mixed
     */
    protected $value;

    /**
     * @param mixed $value
     */
    public function __construct($value)
    {
        if ($value instanceof Type) {
            $this->set($value->get());
        } else {
            $this->set($value);
        }
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    protected function getValue()
    {
        return $this->value;
    }

    /**
     * @return int
     */
    public function toInt(): int
    {
        return intval($this->getValue());
    }

    /**
     * @return string
     */
    public function toString(): string
    {
        return strval($this->getValue());
    }

    /**
     * @return bool
     */
    public function toBoolean(): bool
    {
        return boolval($this->getValue());
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->toString();
    }

    /**
     * @return mixed
     */
    abstract public function get();

    /**
     * @param $v
     * @return mixed
     */
    abstract public function set($v);
}