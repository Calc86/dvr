<?php

namespace app\modules\dvr\components\onvif\wsdl;

class VideoEncoderOptionsExtension
{

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var JpegOptions2 $JPEG
     */
    protected $JPEG = null;

    /**
     * @var Mpeg4Options2 $MPEG4
     */
    protected $MPEG4 = null;

    /**
     * @var H264Options2 $H264
     */
    protected $H264 = null;

    /**
     * @var VideoEncoderOptionsExtension2 $Extension
     */
    protected $Extension = null;

    /**
     * @param string $any
     */
    public function __construct($any)
    {
      $this->any = $any;
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
     * @return \app\modules\dvr\components\onvif\wsdl\VideoEncoderOptionsExtension
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return JpegOptions2
     */
    public function getJPEG()
    {
      return $this->JPEG;
    }

    /**
     * @param JpegOptions2 $JPEG
     * @return \app\modules\dvr\components\onvif\wsdl\VideoEncoderOptionsExtension
     */
    public function setJPEG($JPEG)
    {
      $this->JPEG = $JPEG;
      return $this;
    }

    /**
     * @return Mpeg4Options2
     */
    public function getMPEG4()
    {
      return $this->MPEG4;
    }

    /**
     * @param Mpeg4Options2 $MPEG4
     * @return \app\modules\dvr\components\onvif\wsdl\VideoEncoderOptionsExtension
     */
    public function setMPEG4($MPEG4)
    {
      $this->MPEG4 = $MPEG4;
      return $this;
    }

    /**
     * @return H264Options2
     */
    public function getH264()
    {
      return $this->H264;
    }

    /**
     * @param H264Options2 $H264
     * @return \app\modules\dvr\components\onvif\wsdl\VideoEncoderOptionsExtension
     */
    public function setH264($H264)
    {
      $this->H264 = $H264;
      return $this;
    }

    /**
     * @return VideoEncoderOptionsExtension2
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param VideoEncoderOptionsExtension2 $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\VideoEncoderOptionsExtension
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
