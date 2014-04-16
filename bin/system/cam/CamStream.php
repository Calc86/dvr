<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 09.04.14
 * Time: 14:45
 */

namespace system;

/**
 * Class CamStream
 * @package system
 */
class CamStream implements ICamStream{
    //from *CamStreamConstructor
    private $live_proto;
    private $ip;
    private $live_path;
    private $live_port;
    private $stream_path;

    /**
     * @var \UserID
     */
    private $dvr_id;
    /**
     * @var \CamID
     */
    private $cam_id;
    private $prefix;
    /**
     * @var \cam_control
     */
    private $cc = null;

    /**
     * @param mixed $prefix
     */
    public function setPrefix(\CamPrefix $prefix)
    {
        $this->prefix = $prefix;
        switch($this->prefix){
            case \CamPrefix::RECORD:
            case \CamPrefix::MOTION:
                $this->cc = new \cam_control_archive($this->dvr_id, $this->cam_id, $this->prefix);
                break;
            case \CamPrefix::LHTTP:
            case \CamPrefix::LIVE:
            default:
                $this->cc = new \cam_control($this->dvr_id, $this->cam_id, $this->prefix);
        }

    }

    /**
     * @param \CamID $cam_id
     */
    public function setCamId(\CamID $cam_id)
    {
        $this->cam_id = $cam_id;
    }

    /**
     * @param \UserID $dvr_id
     */
    public function setDvrId(\UserID$dvr_id)
    {
        $this->dvr_id = $dvr_id;
    }


    public function start()
    {
        //play возможен только если внешний поток отдает данные
        try{
            $connection = fsockopen($this->ip, $this->live_port,$err_no, $err_str, 1);
            if($connection){
                $this->cc->play();
            }
            fclose($connection);
        }
        catch(\Exception $e){
            echo "port $this->ip:$this->live_port closed\n";
            echo $e->getMessage()."\n";
        }
    }

    public function stop()
    {
        $this->cc->stop();
    }

    public function isPlaying()
    {
    }

    public function update()
    {
        $this->stop();
        $this->start();
    }

    /**
     * @return \VLMInput
     */
    private function getInputString(){
        return $this->cc->gen_input_string(
            new \WebProto($this->live_proto),
            new \IP($this->ip),
            new \Port($this->live_port),
            new \Path($this->live_path)
        );
    }

    /**
     * @return \Port
     */
    protected function getStreamPort(){
        return new \Port($this->cam_id->get()+9000);
    }

    /**
     * @return \VLMOutput
     */
    private function getOutputString(){
        return $this->cc->gen_live_string($this->getStreamPort(), new \Path($this->stream_path));
    }

    /**
     * @return \VLMOutput
     */
    private function getStreamString(){
        return $this->cc->get_stream_string($this->getStreamPort(), new \Path($this->stream_path));
    }

    public function create()
    {
        $input = $this->getInputString();
        $output = $this->getOutputString();
        $stream = $this->getStreamString();

        switch($this->prefix){
            case \CamPrefix::LIVE:
                $this->cc->create($input, $output);
                break;
            case \CamPrefix::RECORD:
                $path = DIR."/rec/$this->dvr_id";
                $this->cc->create(new \VLMInput($stream), $this->cc->gen_rec_string($path));
                break;
            case \CamPrefix::MOTION:
                $path = DIR."/mtn/$this->dvr_id";
                $this->cc->create(new \VLMInput($stream), $this->cc->gen_rec_string($path));
                break;
            case \CamPrefix::LHTTP:
                $path = new \Path(DIR."/{$this->prefix}/$this->dvr_id");
                $port = new \Port(18000+$this->dvr_id->get());
                $this->cc->create(new \VLMInput($stream), $this->cc->gen_lhttp_string($port, $path, $this->dvr_id, $this->cam_id));
        }
    }

    public function delete()
    {
        $this->stop();
        $this->cc->delete();
    }

    public function getName()
    {
        return $this->prefix;
    }

    /**
     * @param mixed $ip
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
    }

    /**
     * @return mixed
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * @param mixed $live_path
     */
    public function setLivePath($live_path)
    {
        $this->live_path = $live_path;
    }

    /**
     * @return mixed
     */
    public function getLivePath()
    {
        return $this->live_path;
    }

    /**
     * @param mixed $live_port
     */
    public function setLivePort($live_port)
    {
        $this->live_port = $live_port;
    }

    /**
     * @return mixed
     */
    public function getLivePort()
    {
        return $this->live_port;
    }

    /**
     * @param mixed $live_proto
     */
    public function setLiveProto($live_proto)
    {
        $this->live_proto = $live_proto;
    }

    /**
     * @return mixed
     */
    public function getLiveProto()
    {
        return $this->live_proto;
    }

    /**
     * @param mixed $stream_path
     */
    public function setStreamPath($stream_path)
    {
        $this->stream_path = $stream_path;
    }

    /**
     * @return mixed
     */
    public function getStreamPath()
    {
        return $this->stream_path;
    }


} 