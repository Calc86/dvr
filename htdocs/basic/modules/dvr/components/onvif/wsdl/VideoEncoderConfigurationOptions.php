<?php

namespace app\modules\dvr\components\onvif\wsdl;

class VideoEncoderConfigurationOptions
{

    /**
     * @var IntRange $QualityRange
     */
    protected $QualityRange = null;

    /**
     * @var JpegOptions $JPEG
     */
    protected $JPEG = null;

    /**
     * @var Mpeg4Options $MPEG4
     */
    protected $MPEG4 = null;

    /**
     * @var H264Options $H264
     */
    protected $H264 = null;

    /**
     * @var VideoEncoderOptionsExtension $Extension
     */
    protected $Extension = null;

    /**
     * @var boolean $GuaranteedFrameRateSupported
     */
    protected $GuaranteedFrameRateSupported = null;

    /**
     * @param IntRange $QualityRange
     * @param boolean $GuaranteedFrameRateSupported
     */
    public function __construct($QualityRange, $GuaranteedFrameRateSupported)
    {
      $this->QualityRange = $QualityRange;
      $this->GuaranteedFrameRateSupported = $GuaranteedFrameRateSupported;
    }

    /**
     * @return IntRange
     */
    public function getQualityRange()
    {
      return $this->QualityRange;
    }

    /**
     * @param IntRange $QualityRange
     * @return \app\modules\dvr\components\onvif\wsdl\VideoEncoderConfigurationOptions
     */
    public function setQualityRange($QualityRange)
    {
      $this->QualityRange = $QualityRange;
      return $this;
    }

    /**
     * @return JpegOptions
     */
    public function getJPEG()
    {
      return $this->JPEG;
    }

    /**
     * @param JpegOptions $JPEG
     * @return \app\modules\dvr\components\onvif\wsdl\VideoEncoderConfigurationOptions
     */
    public function setJPEG($JPEG)
    {
      $this->JPEG = $JPEG;
      return $this;
    }

    /**
     * @return Mpeg4Options
     */
    public function getMPEG4()
    {
      return $this->MPEG4;
    }

    /**
     * @param Mpeg4Options $MPEG4
     * @return \app\modules\dvr\components\onvif\wsdl\VideoEncoderConfigurationOptions
     */
    public function setMPEG4($MPEG4)
    {
      $this->MPEG4 = $MPEG4;
      return $this;
    }

    /**
     * @return H264Options
     */
    public function getH264()
    {
      return $this->H264;
    }

    /**
     * @param H264Options $H264
     * @return \app\modules\dvr\components\onvif\wsdl\VideoEncoderConfigurationOptions
     */
    public function setH264($H264)
    {
      $this->H264 = $H264;
      return $this;
    }

    /**
     * @return VideoEncoderOptionsExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param VideoEncoderOptionsExtension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\VideoEncoderConfigurationOptions
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getGuaranteedFrameRateSupported()
    {
      return $this->GuaranteedFrameRateSupported;
    }

    /**
     * @param boolean $GuaranteedFrameRateSupported
     * @return \app\modules\dvr\components\onvif\wsdl\VideoEncoderConfigurationOptions
     */
    public function setGuaranteedFrameRateSupported($GuaranteedFrameRateSupported)
    {
      $this->GuaranteedFrameRateSupported = $GuaranteedFrameRateSupported;
      return $this;
    }

}
