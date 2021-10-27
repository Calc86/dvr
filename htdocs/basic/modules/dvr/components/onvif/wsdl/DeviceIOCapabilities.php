<?php

namespace app\modules\dvr\components\onvif\wsdl;

class DeviceIOCapabilities
{

    /**
     * @var anyURI $XAddr
     */
    protected $XAddr = null;

    /**
     * @var int $VideoSources
     */
    protected $VideoSources = null;

    /**
     * @var int $VideoOutputs
     */
    protected $VideoOutputs = null;

    /**
     * @var int $AudioSources
     */
    protected $AudioSources = null;

    /**
     * @var int $AudioOutputs
     */
    protected $AudioOutputs = null;

    /**
     * @var int $RelayOutputs
     */
    protected $RelayOutputs = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param anyURI $XAddr
     * @param int $VideoSources
     * @param int $VideoOutputs
     * @param int $AudioSources
     * @param int $AudioOutputs
     * @param int $RelayOutputs
     * @param string $any
     */
    public function __construct($XAddr, $VideoSources, $VideoOutputs, $AudioSources, $AudioOutputs, $RelayOutputs, $any)
    {
      $this->XAddr = $XAddr;
      $this->VideoSources = $VideoSources;
      $this->VideoOutputs = $VideoOutputs;
      $this->AudioSources = $AudioSources;
      $this->AudioOutputs = $AudioOutputs;
      $this->RelayOutputs = $RelayOutputs;
      $this->any = $any;
    }

    /**
     * @return anyURI
     */
    public function getXAddr()
    {
      return $this->XAddr;
    }

    /**
     * @param anyURI $XAddr
     * @return \app\modules\dvr\components\onvif\wsdl\DeviceIOCapabilities
     */
    public function setXAddr($XAddr)
    {
      $this->XAddr = $XAddr;
      return $this;
    }

    /**
     * @return int
     */
    public function getVideoSources()
    {
      return $this->VideoSources;
    }

    /**
     * @param int $VideoSources
     * @return \app\modules\dvr\components\onvif\wsdl\DeviceIOCapabilities
     */
    public function setVideoSources($VideoSources)
    {
      $this->VideoSources = $VideoSources;
      return $this;
    }

    /**
     * @return int
     */
    public function getVideoOutputs()
    {
      return $this->VideoOutputs;
    }

    /**
     * @param int $VideoOutputs
     * @return \app\modules\dvr\components\onvif\wsdl\DeviceIOCapabilities
     */
    public function setVideoOutputs($VideoOutputs)
    {
      $this->VideoOutputs = $VideoOutputs;
      return $this;
    }

    /**
     * @return int
     */
    public function getAudioSources()
    {
      return $this->AudioSources;
    }

    /**
     * @param int $AudioSources
     * @return \app\modules\dvr\components\onvif\wsdl\DeviceIOCapabilities
     */
    public function setAudioSources($AudioSources)
    {
      $this->AudioSources = $AudioSources;
      return $this;
    }

    /**
     * @return int
     */
    public function getAudioOutputs()
    {
      return $this->AudioOutputs;
    }

    /**
     * @param int $AudioOutputs
     * @return \app\modules\dvr\components\onvif\wsdl\DeviceIOCapabilities
     */
    public function setAudioOutputs($AudioOutputs)
    {
      $this->AudioOutputs = $AudioOutputs;
      return $this;
    }

    /**
     * @return int
     */
    public function getRelayOutputs()
    {
      return $this->RelayOutputs;
    }

    /**
     * @param int $RelayOutputs
     * @return \app\modules\dvr\components\onvif\wsdl\DeviceIOCapabilities
     */
    public function setRelayOutputs($RelayOutputs)
    {
      $this->RelayOutputs = $RelayOutputs;
      return $this;
    }

    /**
     * @return string
     */
    public function getAny()
    {
      return $this->any;
    }

    /**
     * @param string $any
     * @return \app\modules\dvr\components\onvif\wsdl\DeviceIOCapabilities
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
