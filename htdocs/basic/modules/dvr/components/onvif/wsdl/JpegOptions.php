<?php

namespace app\modules\dvr\components\onvif\wsdl;

class JpegOptions
{

    /**
     * @var VideoResolution[] $ResolutionsAvailable
     */
    protected $ResolutionsAvailable = null;

    /**
     * @var IntRange $FrameRateRange
     */
    protected $FrameRateRange = null;

    /**
     * @var IntRange $EncodingIntervalRange
     */
    protected $EncodingIntervalRange = null;

    /**
     * @param VideoResolution[] $ResolutionsAvailable
     * @param IntRange $FrameRateRange
     * @param IntRange $EncodingIntervalRange
     */
    public function __construct(array $ResolutionsAvailable, $FrameRateRange, $EncodingIntervalRange)
    {
      $this->ResolutionsAvailable = $ResolutionsAvailable;
      $this->FrameRateRange = $FrameRateRange;
      $this->EncodingIntervalRange = $EncodingIntervalRange;
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
     * @return \app\modules\dvr\components\onvif\wsdl\JpegOptions
     */
    public function setResolutionsAvailable(array $ResolutionsAvailable)
    {
      $this->ResolutionsAvailable = $ResolutionsAvailable;
      return $this;
    }

    /**
     * @return IntRange
     */
    public function getFrameRateRange()
    {
      return $this->FrameRateRange;
    }

    /**
     * @param IntRange $FrameRateRange
     * @return \app\modules\dvr\components\onvif\wsdl\JpegOptions
     */
    public function setFrameRateRange($FrameRateRange)
    {
      $this->FrameRateRange = $FrameRateRange;
      return $this;
    }

    /**
     * @return IntRange
     */
    public function getEncodingIntervalRange()
    {
      return $this->EncodingIntervalRange;
    }

    /**
     * @param IntRange $EncodingIntervalRange
     * @return \app\modules\dvr\components\onvif\wsdl\JpegOptions
     */
    public function setEncodingIntervalRange($EncodingIntervalRange)
    {
      $this->EncodingIntervalRange = $EncodingIntervalRange;
      return $this;
    }

}
