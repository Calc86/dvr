<?php

namespace app\modules\dvr\components\onvif\wsdl;

class AudioEncoder2Configuration extends ConfigurationEntity
{

    /**
     * @var string $Encoding
     */
    protected $Encoding = null;

    /**
     * @var MulticastConfiguration $Multicast
     */
    protected $Multicast = null;

    /**
     * @var int $Bitrate
     */
    protected $Bitrate = null;

    /**
     * @var int $SampleRate
     */
    protected $SampleRate = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param Name $Name
     * @param int $UseCount
     * @param ReferenceToken $token
     * @param string $Encoding
     * @param int $Bitrate
     * @param int $SampleRate
     * @param string $any
     */
    public function __construct($Name, $UseCount, $token, $Encoding, $Bitrate, $SampleRate, $any)
    {
      parent::__construct($Name, $UseCount, $token);
      $this->Encoding = $Encoding;
      $this->Bitrate = $Bitrate;
      $this->SampleRate = $SampleRate;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getEncoding()
    {
      return $this->Encoding;
    }

    /**
     * @param string $Encoding
     * @return \app\modules\dvr\components\onvif\wsdl\AudioEncoder2Configuration
     */
    public function setEncoding($Encoding)
    {
      $this->Encoding = $Encoding;
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
     * @return \app\modules\dvr\components\onvif\wsdl\AudioEncoder2Configuration
     */
    public function setMulticast($Multicast)
    {
      $this->Multicast = $Multicast;
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
     * @return \app\modules\dvr\components\onvif\wsdl\AudioEncoder2Configuration
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
     * @return \app\modules\dvr\components\onvif\wsdl\AudioEncoder2Configuration
     */
    public function setSampleRate($SampleRate)
    {
      $this->SampleRate = $SampleRate;
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
     * @return \app\modules\dvr\components\onvif\wsdl\AudioEncoder2Configuration
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
