<?php

namespace app\modules\dvr\components\onvif\wsdl;

class VideoEncoderConfiguration extends ConfigurationEntity
{

    /**
     * @var VideoEncoding $Encoding
     */
    protected $Encoding = null;

    /**
     * @var VideoResolution $Resolution
     */
    protected $Resolution = null;

    /**
     * @var float $Quality
     */
    protected $Quality = null;

    /**
     * @var VideoRateControl $RateControl
     */
    protected $RateControl = null;

    /**
     * @var Mpeg4Configuration $MPEG4
     */
    protected $MPEG4 = null;

    /**
     * @var H264Configuration $H264
     */
    protected $H264 = null;

    /**
     * @var MulticastConfiguration $Multicast
     */
    protected $Multicast = null;

    /**
     * @var duration $SessionTimeout
     */
    protected $SessionTimeout = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var boolean $GuaranteedFrameRate
     */
    protected $GuaranteedFrameRate = null;

    /**
     * @param Name $Name
     * @param int $UseCount
     * @param ReferenceToken $token
     * @param VideoEncoding $Encoding
     * @param VideoResolution $Resolution
     * @param float $Quality
     * @param MulticastConfiguration $Multicast
     * @param duration $SessionTimeout
     * @param string $any
     * @param boolean $GuaranteedFrameRate
     */
    public function __construct($Name, $UseCount, $token, $Encoding, $Resolution, $Quality, $Multicast, $SessionTimeout, $any, $GuaranteedFrameRate)
    {
      parent::__construct($Name, $UseCount, $token);
      $this->Encoding = $Encoding;
      $this->Resolution = $Resolution;
      $this->Quality = $Quality;
      $this->Multicast = $Multicast;
      $this->SessionTimeout = $SessionTimeout;
      $this->any = $any;
      $this->GuaranteedFrameRate = $GuaranteedFrameRate;
    }

    /**
     * @return VideoEncoding
     */
    public function getEncoding()
    {
      return $this->Encoding;
    }

    /**
     * @param VideoEncoding $Encoding
     * @return \app\modules\dvr\components\onvif\wsdl\VideoEncoderConfiguration
     */
    public function setEncoding($Encoding)
    {
      $this->Encoding = $Encoding;
      return $this;
    }

    /**
     * @return VideoResolution
     */
    public function getResolution()
    {
      return $this->Resolution;
    }

    /**
     * @param VideoResolution $Resolution
     * @return \app\modules\dvr\components\onvif\wsdl\VideoEncoderConfiguration
     */
    public function setResolution($Resolution)
    {
      $this->Resolution = $Resolution;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuality()
    {
      return $this->Quality;
    }

    /**
     * @param float $Quality
     * @return \app\modules\dvr\components\onvif\wsdl\VideoEncoderConfiguration
     */
    public function setQuality($Quality)
    {
      $this->Quality = $Quality;
      return $this;
    }

    /**
     * @return VideoRateControl
     */
    public function getRateControl()
    {
      return $this->RateControl;
    }

    /**
     * @param VideoRateControl $RateControl
     * @return \app\modules\dvr\components\onvif\wsdl\VideoEncoderConfiguration
     */
    public function setRateControl($RateControl)
    {
      $this->RateControl = $RateControl;
      return $this;
    }

    /**
     * @return Mpeg4Configuration
     */
    public function getMPEG4()
    {
      return $this->MPEG4;
    }

    /**
     * @param Mpeg4Configuration $MPEG4
     * @return \app\modules\dvr\components\onvif\wsdl\VideoEncoderConfiguration
     */
    public function setMPEG4($MPEG4)
    {
      $this->MPEG4 = $MPEG4;
      return $this;
    }

    /**
     * @return H264Configuration
     */
    public function getH264()
    {
      return $this->H264;
    }

    /**
     * @param H264Configuration $H264
     * @return \app\modules\dvr\components\onvif\wsdl\VideoEncoderConfiguration
     */
    public function setH264($H264)
    {
      $this->H264 = $H264;
      return $this;
    }

    /**
     * @return MulticastConfiguration
     */
    public function getMulticast()
    {
      return $this->Multicast;
    }

    /**
     * @param MulticastConfiguration $Multicast
     * @return \app\modules\dvr\components\onvif\wsdl\VideoEncoderConfiguration
     */
    public function setMulticast($Multicast)
    {
      $this->Multicast = $Multicast;
      return $this;
    }

    /**
     * @return duration
     */
    public function getSessionTimeout()
    {
      return $this->SessionTimeout;
    }

    /**
     * @param duration $SessionTimeout
     * @return \app\modules\dvr\components\onvif\wsdl\VideoEncoderConfiguration
     */
    public function setSessionTimeout($SessionTimeout)
    {
      $this->SessionTimeout = $SessionTimeout;
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
     * @return \app\modules\dvr\components\onvif\wsdl\VideoEncoderConfiguration
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getGuaranteedFrameRate()
    {
      return $this->GuaranteedFrameRate;
    }

    /**
     * @param boolean $GuaranteedFrameRate
     * @return \app\modules\dvr\components\onvif\wsdl\VideoEncoderConfiguration
     */
    public function setGuaranteedFrameRate($GuaranteedFrameRate)
    {
      $this->GuaranteedFrameRate = $GuaranteedFrameRate;
      return $this;
    }

}
