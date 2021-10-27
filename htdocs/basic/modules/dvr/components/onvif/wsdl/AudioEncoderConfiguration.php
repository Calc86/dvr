<?php

namespace app\modules\dvr\components\onvif\wsdl;

class AudioEncoderConfiguration extends ConfigurationEntity
{

    /**
     * @var AudioEncoding $Encoding
     */
    protected $Encoding = null;

    /**
     * @var int $Bitrate
     */
    protected $Bitrate = null;

    /**
     * @var int $SampleRate
     */
    protected $SampleRate = null;

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
     * @param Name $Name
     * @param int $UseCount
     * @param ReferenceToken $token
     * @param AudioEncoding $Encoding
     * @param int $Bitrate
     * @param int $SampleRate
     * @param MulticastConfiguration $Multicast
     * @param duration $SessionTimeout
     * @param string $any
     */
    public function __construct($Name, $UseCount, $token, $Encoding, $Bitrate, $SampleRate, $Multicast, $SessionTimeout, $any)
    {
      parent::__construct($Name, $UseCount, $token);
      $this->Encoding = $Encoding;
      $this->Bitrate = $Bitrate;
      $this->SampleRate = $SampleRate;
      $this->Multicast = $Multicast;
      $this->SessionTimeout = $SessionTimeout;
      $this->any = $any;
    }

    /**
     * @return AudioEncoding
     */
    public function getEncoding()
    {
      return $this->Encoding;
    }

    /**
     * @param AudioEncoding $Encoding
     * @return \app\modules\dvr\components\onvif\wsdl\AudioEncoderConfiguration
     */
    public function setEncoding($Encoding)
    {
      $this->Encoding = $Encoding;
      return $this;
    }

    /**
     * @return int
     */
    public function getBitrate()
    {
      return $this->Bitrate;
    }

    /**
     * @param int $Bitrate
     * @return \app\modules\dvr\components\onvif\wsdl\AudioEncoderConfiguration
     */
    public function setBitrate($Bitrate)
    {
      $this->Bitrate = $Bitrate;
      return $this;
    }

    /**
     * @return int
     */
    public function getSampleRate()
    {
      return $this->SampleRate;
    }

    /**
     * @param int $SampleRate
     * @return \app\modules\dvr\components\onvif\wsdl\AudioEncoderConfiguration
     */
    public function setSampleRate($SampleRate)
    {
      $this->SampleRate = $SampleRate;
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
     * @return \app\modules\dvr\components\onvif\wsdl\AudioEncoderConfiguration
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
     * @return \app\modules\dvr\components\onvif\wsdl\AudioEncoderConfiguration
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
     * @return \app\modules\dvr\components\onvif\wsdl\AudioEncoderConfiguration
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
