<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 14.05.14
 * Time: 17:10
 */

namespace app\modules\dvr\components\vlc2;

use app\modules\dvr\components\common\Log;

/**
 * Vlm Vlc управление
 *
 * https://wiki.videolan.org/Documentation:Streaming_HowTo/VLM/
 *
 */
abstract class Vlm
{
    protected string $return = '';
    protected string $cam;

    function __construct(string $camName)
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

        $direction = $input ? 'input' : 'output';

        $command = "setup $this->cam $direction $setup";
        $this->execute($command);
    }

    public function _control(string $command)
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
     * @param string|null $module
     * @return void
     */
    public function log($message, string $module = null)
    {
        $module = $module ?? get_called_class();
        Log::getInstance()->put($message, $module);
    }
}
