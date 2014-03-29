<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 29.03.14
 * Time: 19:13
 */

namespace system;

/**
 * Class MysqlCamStream
 * @package system
 */
class MysqlCamStream implements ICamStream {
    //from MysqlCamStreamConstructor
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
        switch($prefix){
            case \CamPrefix::RECORD:
            case \CamPrefix::MOTION:
                $this->cc = new \cam_control($this->dvr_id, $this->cam_id, $prefix);
                break;
            case \CamPrefix::LIVE:
            default:
                $this->cc = new \cam_control_archive($this->dvr_id, $this->cam_id, $this->prefix);

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
        $this->cc->play();
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
        $this->cc->stop();
        $this->cc->play();
    }

    public function create()
    {
        $stream_port = new \Port($this->dvr_id->get()+9000);
        $input = $this->cc->gen_input_string(
            new \WebProto($this->live_proto),
            new \IP($this->ip),
            new \Port($this->live_port),
            new \Path($this->live_path)
        );
        $output = $this->cc->gen_live_string($stream_port, new \Path($this->stream_path));
        $stream = $this->cc->get_stream_string($stream_port, new \Path($this->stream_path));

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
}