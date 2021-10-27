<?php

namespace app\modules\dvr\components\onvif\wsdl;

class RecordingCapabilities
{

    /**
     * @var anyURI $XAddr
     */
    protected $XAddr = null;

    /**
     * @var boolean $ReceiverSource
     */
    protected $ReceiverSource = null;

    /**
     * @var boolean $MediaProfileSource
     */
    protected $MediaProfileSource = null;

    /**
     * @var boolean $DynamicRecordings
     */
    protected $DynamicRecordings = null;

    /**
     * @var boolean $DynamicTracks
     */
    protected $DynamicTracks = null;

    /**
     * @var int $MaxStringLength
     */
    protected $MaxStringLength = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param anyURI $XAddr
     * @param boolean $ReceiverSource
     * @param boolean $MediaProfileSource
     * @param boolean $DynamicRecordings
     * @param boolean $DynamicTracks
     * @param int $MaxStringLength
     * @param string $any
     */
    public function __construct($XAddr, $ReceiverSource, $MediaProfileSource, $DynamicRecordings, $DynamicTracks, $MaxStringLength, $any)
    {
      $this->XAddr = $XAddr;
      $this->ReceiverSource = $ReceiverSource;
      $this->MediaProfileSource = $MediaProfileSource;
      $this->DynamicRecordings = $DynamicRecordings;
      $this->DynamicTracks = $DynamicTracks;
      $this->MaxStringLength = $MaxStringLength;
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
     * @return \app\modules\dvr\components\onvif\wsdl\RecordingCapabilities
     */
    public function setXAddr($XAddr)
    {
      $this->XAddr = $XAddr;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReceiverSource()
    {
      return $this->ReceiverSource;
    }

    /**
     * @param boolean $ReceiverSource
     * @return \app\modules\dvr\components\onvif\wsdl\RecordingCapabilities
     */
    public function setReceiverSource($ReceiverSource)
    {
      $this->ReceiverSource = $ReceiverSource;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMediaProfileSource()
    {
      return $this->MediaProfileSource;
    }

    /**
     * @param boolean $MediaProfileSource
     * @return \app\modules\dvr\components\onvif\wsdl\RecordingCapabilities
     */
    public function setMediaProfileSource($MediaProfileSource)
    {
      $this->MediaProfileSource = $MediaProfileSource;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDynamicRecordings()
    {
      return $this->DynamicRecordings;
    }

    /**
     * @param boolean $DynamicRecordings
     * @return \app\modules\dvr\components\onvif\wsdl\RecordingCapabilities
     */
    public function setDynamicRecordings($DynamicRecordings)
    {
      $this->DynamicRecordings = $DynamicRecordings;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDynamicTracks()
    {
      return $this->DynamicTracks;
    }

    /**
     * @param boolean $DynamicTracks
     * @return \app\modules\dvr\components\onvif\wsdl\RecordingCapabilities
     */
    public function setDynamicTracks($DynamicTracks)
    {
      $this->DynamicTracks = $DynamicTracks;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxStringLength()
    {
      return $this->MaxStringLength;
    }

    /**
     * @param int $MaxStringLength
     * @return \app\modules\dvr\components\onvif\wsdl\RecordingCapabilities
     */
    public function setMaxStringLength($MaxStringLength)
    {
      $this->MaxStringLength = $MaxStringLength;
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
     * @return \app\modules\dvr\components\onvif\wsdl\RecordingCapabilities
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
