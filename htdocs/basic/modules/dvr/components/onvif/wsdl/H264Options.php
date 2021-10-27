<?php

namespace app\modules\dvr\components\onvif\wsdl;

class H264Options
{

    /**
     * @var VideoResolution[] $ResolutionsAvailable
     */
    protected $ResolutionsAvailable = null;

    /**
     * @var IntRange $GovLengthRange
     */
    protected $GovLengthRange = null;

    /**
     * @var IntRange $FrameRateRange
     */
    protected $FrameRateRange = null;

    /**
     * @var IntRange $EncodingIntervalRange
     */
    protected $EncodingIntervalRange = null;

    /**
     * @var H264Profile[] $H264ProfilesSupported
     */
    protected $H264ProfilesSupported = null;

    /**
     * @param VideoResolution[] $ResolutionsAvailable
     * @param IntRange $GovLengthRange
     * @param IntRange $FrameRateRange
     * @param IntRange $EncodingIntervalRange
     * @param H264Profile[] $H264ProfilesSupported
     */
    public function __construct(array $ResolutionsAvailable, $GovLengthRange, $FrameRateRange, $EncodingIntervalRange, array $H264ProfilesSupported)
    {
      $this->ResolutionsAvailable = $ResolutionsAvailable;
      $this->GovLengthRange = $GovLengthRange;
      $this->FrameRateRange = $FrameRateRange;
      $this->EncodingIntervalRange = $EncodingIntervalRange;
      $this->H264ProfilesSupported = $H264ProfilesSupported;
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
     * @return \app\modules\dvr\components\onvif\wsdl\H264Options
     */
    public function setResolutionsAvailable(array $ResolutionsAvailable)
    {
      $this->ResolutionsAvailable = $ResolutionsAvailable;
      return $this;
    }

    /**
     * @return IntRange
     */
    public function getGovLengthRange()
    {
      return $this->GovLengthRange;
    }

    /**
     * @param IntRange $GovLengthRange
     * @return \app\modules\dvr\components\onvif\wsdl\H264Options
     */
    public function setGovLengthRange($GovLengthRange)
    {
      $this->GovLengthRange = $GovLengthRange;
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
     * @return \app\modules\dvr\components\onvif\wsdl\H264Options
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
     * @return \app\modules\dvr\components\onvif\wsdl\H264Options
     */
    public function setEncodingIntervalRange($EncodingIntervalRange)
    {
      $this->EncodingIntervalRange = $EncodingIntervalRange;
      return $this;
    }

    /**
     * @return H264Profile[]
     */
    public function getH264ProfilesSupported()
    {
      return $this->H264ProfilesSupported;
    }

    /**
     * @param H264Profile[] $H264ProfilesSupported
     * @return \app\modules\dvr\components\onvif\wsdl\H264Options
     */
    public function setH264ProfilesSupported(array $H264ProfilesSupported)
    {
      $this->H264ProfilesSupported = $H264ProfilesSupported;
      return $this;
    }

}
