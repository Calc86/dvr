<?php

namespace app\modules\dvr\components\onvif\wsdl;

class JpegDecOptions
{

    /**
     * @var VideoResolution[] $ResolutionsAvailable
     */
    protected $ResolutionsAvailable = null;

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
     * @param IntRange $SupportedInputBitrate
     * @param IntRange $SupportedFrameRate
     * @param string $any
     */
    public function __construct(array $ResolutionsAvailable, $SupportedInputBitrate, $SupportedFrameRate, $any)
    {
      $this->ResolutionsAvailable = $ResolutionsAvailable;
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
     * @return \app\modules\dvr\components\onvif\wsdl\JpegDecOptions
     */
    public function setResolutionsAvailable(array $ResolutionsAvailable)
    {
      $this->ResolutionsAvailable = $ResolutionsAvailable;
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
     * @return \app\modules\dvr\components\onvif\wsdl\JpegDecOptions
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
     * @return \app\modules\dvr\components\onvif\wsdl\JpegDecOptions
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
     * @return \app\modules\dvr\components\onvif\wsdl\JpegDecOptions
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
