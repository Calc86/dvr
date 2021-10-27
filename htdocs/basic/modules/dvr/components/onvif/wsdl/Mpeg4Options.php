<?php

namespace app\modules\dvr\components\onvif\wsdl;

class Mpeg4Options
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
     * @var Mpeg4Profile[] $Mpeg4ProfilesSupported
     */
    protected $Mpeg4ProfilesSupported = null;

    /**
     * @param VideoResolution[] $ResolutionsAvailable
     * @param IntRange $GovLengthRange
     * @param IntRange $FrameRateRange
     * @param IntRange $EncodingIntervalRange
     * @param Mpeg4Profile[] $Mpeg4ProfilesSupported
     */
    public function __construct(array $ResolutionsAvailable, $GovLengthRange, $FrameRateRange, $EncodingIntervalRange, array $Mpeg4ProfilesSupported)
    {
      $this->ResolutionsAvailable = $ResolutionsAvailable;
      $this->GovLengthRange = $GovLengthRange;
      $this->FrameRateRange = $FrameRateRange;
      $this->EncodingIntervalRange = $EncodingIntervalRange;
      $this->Mpeg4ProfilesSupported = $Mpeg4ProfilesSupported;
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
     * @return \app\modules\dvr\components\onvif\wsdl\Mpeg4Options
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
     * @return \app\modules\dvr\components\onvif\wsdl\Mpeg4Options
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
     * @return \app\modules\dvr\components\onvif\wsdl\Mpeg4Options
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
     * @return \app\modules\dvr\components\onvif\wsdl\Mpeg4Options
     */
    public function setEncodingIntervalRange($EncodingIntervalRange)
    {
      $this->EncodingIntervalRange = $EncodingIntervalRange;
      return $this;
    }

    /**
     * @return Mpeg4Profile[]
     */
    public function getMpeg4ProfilesSupported()
    {
      return $this->Mpeg4ProfilesSupported;
    }

    /**
     * @param Mpeg4Profile[] $Mpeg4ProfilesSupported
     * @return \app\modules\dvr\components\onvif\wsdl\Mpeg4Options
     */
    public function setMpeg4ProfilesSupported(array $Mpeg4ProfilesSupported)
    {
      $this->Mpeg4ProfilesSupported = $Mpeg4ProfilesSupported;
      return $this;
    }

}
