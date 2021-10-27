<?php

namespace app\modules\dvr\components\onvif\wsdl;

class VideoEncoder2Configuration extends ConfigurationEntity
{

    /**
     * @var string $Encoding
     */
    protected $Encoding = null;

    /**
     * @var VideoResolution2 $Resolution
     */
    protected $Resolution = null;

    /**
     * @var VideoRateControl2 $RateControl
     */
    protected $RateControl = null;

    /**
     * @var MulticastConfiguration $Multicast
     */
    protected $Multicast = null;

    /**
     * @var float $Quality
     */
    protected $Quality = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var int $GovLength
     */
    protected $GovLength = null;

    /**
     * @var string $Profile
     */
    protected $Profile = null;

    /**
     * @var boolean $GuaranteedFrameRate
     */
    protected $GuaranteedFrameRate = null;

    /**
     * @param Name $Name
     * @param int $UseCount
     * @param ReferenceToken $token
     * @param string $Encoding
     * @param VideoResolution2 $Resolution
     * @param float $Quality
     * @param string $any
     * @param int $GovLength
     * @param string $Profile
     * @param boolean $GuaranteedFrameRate
     */
    public function __construct($Name, $UseCount, $token, $Encoding, $Resolution, $Quality, $any, $GovLength, $Profile, $GuaranteedFrameRate)
    {
      parent::__construct($Name, $UseCount, $token);
      $this->Encoding = $Encoding;
      $this->Resolution = $Resolution;
      $this->Quality = $Quality;
      $this->any = $any;
      $this->GovLength = $GovLength;
      $this->Profile = $Profile;
      $this->GuaranteedFrameRate = $GuaranteedFrameRate;
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
     * @return \app\modules\dvr\components\onvif\wsdl\VideoEncoder2Configuration
     */
    public function setEncoding($Encoding)
    {
      $this->Encoding = $Encoding;
      return $this;
    }

    /**
     * @return VideoResolution2
     */
    public function getResolution()
    {
      return $this->Resolution;
    }

    /**
     * @param VideoResolution2 $Resolution
     * @return \app\modules\dvr\components\onvif\wsdl\VideoEncoder2Configuration
     */
    public function setResolution($Resolution)
    {
      $this->Resolution = $Resolution;
      return $this;
    }

    /**
     * @return VideoRateControl2
     */
    public function getRateControl()
    {
      return $this->RateControl;
    }

    /**
     * @param VideoRateControl2 $RateControl
     * @return \app\modules\dvr\components\onvif\wsdl\VideoEncoder2Configuration
     */
    public function setRateControl($RateControl)
    {
      $this->RateControl = $RateControl;
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
     * @return \app\modules\dvr\components\onvif\wsdl\VideoEncoder2Configuration
     */
    public function setMulticast($Multicast)
    {
      $this->Multicast = $Multicast;
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
     * @return \app\modules\dvr\components\onvif\wsdl\VideoEncoder2Configuration
     */
    public function setQuality($Quality)
    {
      $this->Quality = $Quality;
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
     * @return \app\modules\dvr\components\onvif\wsdl\VideoEncoder2Configuration
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return int
     */
    public function getGovLength()
    {
      return $this->GovLength;
    }

    /**
     * @param int $GovLength
     * @return \app\modules\dvr\components\onvif\wsdl\VideoEncoder2Configuration
     */
    public function setGovLength($GovLength)
    {
      $this->GovLength = $GovLength;
      return $this;
    }

    /**
     * @return string
     */
    public function getProfile()
    {
      return $this->Profile;
    }

    /**
     * @param string $Profile
     * @return \app\modules\dvr\components\onvif\wsdl\VideoEncoder2Configuration
     */
    public function setProfile($Profile)
    {
      $this->Profile = $Profile;
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
     * @return \app\modules\dvr\components\onvif\wsdl\VideoEncoder2Configuration
     */
    public function setGuaranteedFrameRate($GuaranteedFrameRate)
    {
      $this->GuaranteedFrameRate = $GuaranteedFrameRate;
      return $this;
    }

}
