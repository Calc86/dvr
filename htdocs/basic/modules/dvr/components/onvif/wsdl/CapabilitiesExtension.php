<?php

namespace app\modules\dvr\components\onvif\wsdl;

class CapabilitiesExtension
{

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var DeviceIOCapabilities $DeviceIO
     */
    protected $DeviceIO = null;

    /**
     * @var DisplayCapabilities $Display
     */
    protected $Display = null;

    /**
     * @var RecordingCapabilities $Recording
     */
    protected $Recording = null;

    /**
     * @var SearchCapabilities $Search
     */
    protected $Search = null;

    /**
     * @var ReplayCapabilities $Replay
     */
    protected $Replay = null;

    /**
     * @var ReceiverCapabilities $Receiver
     */
    protected $Receiver = null;

    /**
     * @var AnalyticsDeviceCapabilities $AnalyticsDevice
     */
    protected $AnalyticsDevice = null;

    /**
     * @var CapabilitiesExtension2 $Extensions
     */
    protected $Extensions = null;

    /**
     * @param string $any
     */
    public function __construct($any)
    {
      $this->any = $any;
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
     * @return \app\modules\dvr\components\onvif\wsdl\CapabilitiesExtension
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return DeviceIOCapabilities
     */
    public function getDeviceIO()
    {
      return $this->DeviceIO;
    }

    /**
     * @param DeviceIOCapabilities $DeviceIO
     * @return \app\modules\dvr\components\onvif\wsdl\CapabilitiesExtension
     */
    public function setDeviceIO($DeviceIO)
    {
      $this->DeviceIO = $DeviceIO;
      return $this;
    }

    /**
     * @return DisplayCapabilities
     */
    public function getDisplay()
    {
      return $this->Display;
    }

    /**
     * @param DisplayCapabilities $Display
     * @return \app\modules\dvr\components\onvif\wsdl\CapabilitiesExtension
     */
    public function setDisplay($Display)
    {
      $this->Display = $Display;
      return $this;
    }

    /**
     * @return RecordingCapabilities
     */
    public function getRecording()
    {
      return $this->Recording;
    }

    /**
     * @param RecordingCapabilities $Recording
     * @return \app\modules\dvr\components\onvif\wsdl\CapabilitiesExtension
     */
    public function setRecording($Recording)
    {
      $this->Recording = $Recording;
      return $this;
    }

    /**
     * @return SearchCapabilities
     */
    public function getSearch()
    {
      return $this->Search;
    }

    /**
     * @param SearchCapabilities $Search
     * @return \app\modules\dvr\components\onvif\wsdl\CapabilitiesExtension
     */
    public function setSearch($Search)
    {
      $this->Search = $Search;
      return $this;
    }

    /**
     * @return ReplayCapabilities
     */
    public function getReplay()
    {
      return $this->Replay;
    }

    /**
     * @param ReplayCapabilities $Replay
     * @return \app\modules\dvr\components\onvif\wsdl\CapabilitiesExtension
     */
    public function setReplay($Replay)
    {
      $this->Replay = $Replay;
      return $this;
    }

    /**
     * @return ReceiverCapabilities
     */
    public function getReceiver()
    {
      return $this->Receiver;
    }

    /**
     * @param ReceiverCapabilities $Receiver
     * @return \app\modules\dvr\components\onvif\wsdl\CapabilitiesExtension
     */
    public function setReceiver($Receiver)
    {
      $this->Receiver = $Receiver;
      return $this;
    }

    /**
     * @return AnalyticsDeviceCapabilities
     */
    public function getAnalyticsDevice()
    {
      return $this->AnalyticsDevice;
    }

    /**
     * @param AnalyticsDeviceCapabilities $AnalyticsDevice
     * @return \app\modules\dvr\components\onvif\wsdl\CapabilitiesExtension
     */
    public function setAnalyticsDevice($AnalyticsDevice)
    {
      $this->AnalyticsDevice = $AnalyticsDevice;
      return $this;
    }

    /**
     * @return CapabilitiesExtension2
     */
    public function getExtensions()
    {
      return $this->Extensions;
    }

    /**
     * @param CapabilitiesExtension2 $Extensions
     * @return \app\modules\dvr\components\onvif\wsdl\CapabilitiesExtension
     */
    public function setExtensions($Extensions)
    {
      $this->Extensions = $Extensions;
      return $this;
    }

}
