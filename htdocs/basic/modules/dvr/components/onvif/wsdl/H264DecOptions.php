<?php

namespace app\modules\dvr\components\onvif\wsdl;

class H264DecOptions
{

    /**
     * @var VideoResolution[] $ResolutionsAvailable
     */
    protected $ResolutionsAvailable = null;

    /**
     * @var H264Profile[] $SupportedH264Profiles
     */
    protected $SupportedH264Profiles = null;

    /**
     * @var IntRange $SupportedInputBitrate
     */
    protected $SupportedInputBitrate = null;

    /**
     * @var IntRange $SupportedFrameRate
     */
    protected $SupportedFrameRate = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param VideoResolution[] $ResolutionsAvailable
     * @param H264Profile[] $SupportedH264Profiles
     * @param IntRange $SupportedInputBitrate
     * @param IntRange $SupportedFrameRate
     * @param string $any
     */
    public function __construct(array $ResolutionsAvailable, array $SupportedH264Profiles, $SupportedInputBitrate, $SupportedFrameRate, $any)
    {
      $this->ResolutionsAvailable = $ResolutionsAvailable;
      $this->SupportedH264Profiles = $SupportedH264Profiles;
      $this->SupportedInputBitrate = $SupportedInputBitrate;
      $this->SupportedFrameRate = $SupportedFrameRate;
      $this->any = $any;
    }

    /**
     * @return VideoResolution[]
     */
    public function getResolutionsAvailable()
    {
      return $this->ResolutionsAvailable;
    }

    /**
     * @param VideoResolution[] $ResolutionsAvailable
     * @return \app\modules\dvr\components\onvif\wsdl\H264DecOptions
     */
    public function setResolutionsAvailable(array $ResolutionsAvailable)
    {
      $this->ResolutionsAvailable = $ResolutionsAvailable;
      return $this;
    }

    /**
     * @return H264Profile[]
     */
    public function getSupportedH264Profiles()
    {
      return $this->SupportedH264Profiles;
    }

    /**
     * @param H264Profile[] $SupportedH264Profiles
     * @return \app\modules\dvr\components\onvif\wsdl\H264DecOptions
     */
    public function setSupportedH264Profiles(array $SupportedH264Profiles)
    {
      $this->SupportedH264Profiles = $SupportedH264Profiles;
      return $this;
    }

    /**
     * @return IntRange
     */
    public function getSupportedInputBitrate()
    {
      return $this->SupportedInputBitrate;
    }

    /**
     * @param IntRange $SupportedInputBitrate
     * @return \app\modules\dvr\components\onvif\wsdl\H264DecOptions
     */
    public function setSupportedInputBitrate($SupportedInputBitrate)
    {
      $this->SupportedInputBitrate = $SupportedInputBitrate;
      return $this;
    }

    /**
     * @return IntRange
     */
    public function getSupportedFrameRate()
    {
      return $this->SupportedFrameRate;
    }

    /**
     * @param IntRange $SupportedFrameRate
     * @return \app\modules\dvr\components\onvif\wsdl\H264DecOptions
     */
    public function setSupportedFrameRate($SupportedFrameRate)
    {
      $this->SupportedFrameRate = $SupportedFrameRate;
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
     * @return \app\modules\dvr\components\onvif\wsdl\H264DecOptions
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
