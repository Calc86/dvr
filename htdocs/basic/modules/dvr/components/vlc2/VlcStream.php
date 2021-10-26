<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 14.05.14
 * Time: 16:19
 */

namespace app\modules\dvr\components\vlc2;

use app\modules\dvr\components\common\Stream;
use app\modules\dvr\components\common\System;
use app\modules\dvr\components\interfaces\ICam;
use app\modules\dvr\components\interfaces\ICommand;
use Exception;

/**
 * vlm controlled stream
 */
abstract class VlcStream extends Stream
{
    private const CAM_PREFIX = 'CAM_';

    /**
     * @var ICommand|null
     */
    private ?ICommand $testInputCommand = null;
    protected HttpVlm $vlm;
    private string $streamName;
    //protected Config $config;

    /**
     * @param ICam $cam
     * @param string $streamName
     */
    public function __construct(ICam $cam, string $streamName)
    {
        parent::__construct($cam);
        $this->config = new Config();   //todo 20211026

        $this->streamName = $streamName;
        $this->vlm = new HttpVlm(
            $this->getVlcName(),
            $this->config->host,
            $this->config->httpPort + $this->cam->getDVR()->getID()
        );
    }

    /**
     * Получить полное имя стрима камеры
     *
     * @return string
     */
    protected function getVlcName(): string
    {
        return self::CAM_PREFIX . $this->cam->getID() . "_$this->streamName";
    }

    /**
     * @param ICommand $command
     */
    public function setTestInputCommand(ICommand $command)
    {
        $this->testInputCommand = $command;
    }

    /**
     * @return string
     */
    protected function getName(): string
    {
        return $this->streamName;
    }

    public function create()
    {
        parent::create();

        if (System::getInstance()->getFlag(System::FLAG_STOP)) return;

        $this->vlm->_new();
        $this->vlm->_setup($this->getInputVlm(), true);
        $this->vlm->_setup($this->getOutputVlm());
    }

    public function delete()
    {
        $this->vlm->_del();
    }

    /**
     * @return bool
     */
    protected function testInput(): bool
    {
        $url = parse_url($this->getInputVlm());
        if ($url['scheme'] != 'file') {
            $ip = $url['host'];
            $a = explode('.', $ip); // todo 20211025 check domain name
            if ($a[0] < 224) {    //no test for multicast
                try {
                    $connection = fsockopen($url['host'], $url['port'], $err_no, $err_str, SOCKET_TIMEOUT);
                    fclose($connection);
                    return true;
                } catch (Exception $e) {
                    if ($this->testInputCommand != null)
                        $this->testInputCommand->execute();
                    return false;
                }
            }
        } else {
            return realpath($url['path']) !== false;
        }
        return true;
    }

    public function update()
    {
        parent::update();
        if (!$this->isEnabled()) $this->stop();
        if (!$this->testInput()) $this->stop();
    }

    /**
     * @return void
     */
    public function _start()
    {
        if ($this->testInput()) {
            $this->vlm->_control('play');
        }
    }

    public function stop()
    {
        parent::stop();

        $this->vlm->_control('stop');
    }

    /**
     * @return mixed
     */
    abstract protected function getInputVlm();

    /**
     * @param string $transcode
     * @return mixed
     */
    abstract protected function getOutputVlm(string $transcode = '');
}
