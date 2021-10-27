<?php

namespace app\modules\dvr\components\onvif\wsdl;

class VideoDecoderConfigurationOptions
{

    /**
     * @var JpegDecOptions $JpegDecOptions
     */
    protected $JpegDecOptions = null;

    /**
     * @var H264DecOptions $H264DecOptions
     */
    protected $H264DecOptions = null;

    /**
     * @var Mpeg4DecOptions $Mpeg4DecOptions
     */
    protected $Mpeg4DecOptions = null;

    /**
     * @var VideoDecoderConfigurationOptionsExtension $Extension
     */
    protected $Extension = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JpegDecOptions
     */
    public function getJpegDecOptions()
    {
      return $this->JpegDecOptions;
    }

    /**
     * @param JpegDecOptions $JpegDecOptions
     * @return \app\modules\dvr\components\onvif\wsdl\VideoDecoderConfigurationOptions
     */
    public function setJpegDecOptions($JpegDecOptions)
    {
      $this->JpegDecOptions = $JpegDecOptions;
      return $this;
    }

    /**
     * @return H264DecOptions
     */
    public function getH264DecOptions()
    {
      return $this->H264DecOptions;
    }

    /**
     * @param H264DecOptions $H264DecOptions
     * @return \app\modules\dvr\components\onvif\wsdl\VideoDecoderConfigurationOptions
     */
    public function setH264DecOptions($H264DecOptions)
    {
      $this->H264DecOptions = $H264DecOptions;
      return $this;
    }

    /**
     * @return Mpeg4DecOptions
     */
    public function getMpeg4DecOptions()
    {
      return $this->Mpeg4DecOptions;
    }

    /**
     * @param Mpeg4DecOptions $Mpeg4DecOptions
     * @return \app\modules\dvr\components\onvif\wsdl\VideoDecoderConfigurationOptions
     */
    public function setMpeg4DecOptions($Mpeg4DecOptions)
    {
      $this->Mpeg4DecOptions = $Mpeg4DecOptions;
      return $this;
    }

    /**
     * @return VideoDecoderConfigurationOptionsExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param VideoDecoderConfigurationOptionsExtension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\VideoDecoderConfigurationOptions
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
