<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 14.05.14
 * Time: 17:10
 */

namespace system2;

/**
 * Vlm Vlc управление
 * Class Vlm
 * @package system2
 */
abstract class Vlm
{
    protected string $return = '';
    protected $cam;

    /**
     * @param $camName
     */
    function __construct($camName)
    {
        $this->cam = $camName;
    }

    /**
     * Выполнить vlm команду
     * @param $command
     */
    protected function execute($command)
    {
        $this->log($command);
        $this->_execute($command);
    }

    /**
     * Переопределить в зависимости от использования telnet или http интерфейса
     * @param $command
     * @return mixed
     */
    abstract protected function _execute($command);

    /**
     * vlm new
     */
    public function _new()
    {
        $this->execute("new $this->cam broadcast enabled loop");
    }

    /**
     * vlm setup
     * @param $setup
     * @param bool $input
     */
    public function _setup($setup, bool $input = false)
    {

        $direction = 'output';
        if ($input) $direction = 'input';

        $command = "setup $this->cam $direction $setup";
        $this->execute($command);
    }

    /**
     * vlm control
     * @param $command
     */
    public function _control($command)
    {
        $command = "control $this->cam $command";
        $this->execute($command);
    }

    /**
     * vlm show
     */
    public function _show()
    {
        $this->execute("show $this->cam");
    }

    /**
     * vlm del
     */
    public function _del()
    {
        $this->execute("del $this->cam");
    }

    /**
     * write message to log
     * @param $message
     * @return void
     */
    public function log($message)
    {
        Log::getInstance()->put($message, __CLASS__);
    }
}
