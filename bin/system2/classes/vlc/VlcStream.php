<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 14.05.14
 * Time: 16:19
 */

namespace system2;

/**
 * vlm controlled stream
 * Class VlcStream
 * @package system2
 */
abstract class VlcStream extends Stream {

    protected $vlm;
    protected $streamName;

    /**
     * @param ICam $cam
     * @param $streamName
     */
    public function __construct(ICam $cam, $streamName)
    {
        parent::__construct($cam);
        $this->streamName = $streamName;
        $this->vlm = new HttpVlm($this->getName(), LIVEHOST, HTSTART+$this->cam->getDVR()->getID());
    }

    /**
     * Получить полное имя стрима камеры
     * @return string
     */
    protected function getName(){
        return 'CAM_'.$this->cam->getID()."_$this->streamName";
    }

    public function create(){
        parent::create();

        $this->vlm->_new();
        $this->vlm->_setup($this->getInputVlm(), true);
        $this->vlm->_setup($this->getOutputVlm());
    }

    public function delete(){
        $this->vlm->_del();
    }

    protected function testInput(){

        $url = parse_url($this->getInputVlm());
        if($url['scheme'] != 'file'){
            $ip = $url['host'];
            $a = explode('.', $ip);
            if($a[0] < 224){    //no test for multicast
                $connection = fsockopen($url['host'], $url['port'], $err_no, $err_str, SOCKET_TIMEOUT);
                fclose($connection);
            }
        }
    }

    public function start()
    {
        parent::start();

        try{
            $this->testInput();
            $this->vlm->_control('play');
        }catch (\Exception $e){
            Log::getInstance()->put($e->getMessage(), __CLASS__, Log::ERROR);
            $this->stop();
        }
    }

    public function stop()
    {
        parent::stop();

        $this->vlm->_control('stop');
    }

    abstract protected function getInputVlm();

    /**
     * @param string $transcode
     * @return mixed
     */
    abstract protected function getOutputVlm($transcode='');
}
