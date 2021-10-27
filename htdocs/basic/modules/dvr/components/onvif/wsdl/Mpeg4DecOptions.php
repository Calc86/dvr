<?php

namespace app\modules\dvr\components\onvif\wsdl;

class Mpeg4DecOptions
{

    /**
     * @var VideoResolution[] $ResolutionsAvailable
     */
    protected $ResolutionsAvailable = null;

    /**
     * @var Mpeg4Profile[] $SupportedMpeg4Profiles
     */
    protected $SupportedMpeg4Profiles = null;

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
     * @param Mpeg4Profile[] $SupportedMpeg4Profiles
     * @param IntRange $SupportedInputBitrate
     * @param IntRange $SupportedFrameRate
     * @param string $any
     */
    public function __construct(array $ResolutionsAvailable, array $SupportedMpeg4Profiles, $SupportedInputBitrate, $SupportedFrameRate, $any)
    {
      $this->ResolutionsAvailable = $ResolutionsAvailable;
      $this->SupportedMpeg4Profiles = $SupportedMpeg4Profiles;
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
     * @return \app\modules\dvr\components\onvif\wsdl\Mpeg4DecOptions
     */
    public function setResolutionsAvailable(array $ResolutionsAvailable)
    {
      $this->ResolutionsAvailable = $ResolutionsAvailable;
      return $this;
    }

    /**
     * @return Mpeg4Profile[]
     */
    public function getSupportedMpeg4Profiles()
    {
      return $this->SupportedMpeg4Profiles;
    }

    /**
     * @param Mpeg4Profile[] $SupportedMpeg4Profiles
     * @return \app\modules\dvr\components\onvif\wsdl\Mpeg4DecOptions
     */
    public function setSupportedMpeg4Profiles(array $SupportedMpeg4Profiles)
    {
      $this->SupportedMpeg4Profiles = $SupportedMpeg4Profiles;
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
     * @return \app\modules\dvr\components\onvif\wsdl\Mpeg4DecOptions
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
     * @return \app\modules\dvr\components\onvif\wsdl\Mpeg4DecOptions
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
     * @return \app\modules\dvr\components\onvif\wsdl\Mpeg4DecOptions
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
