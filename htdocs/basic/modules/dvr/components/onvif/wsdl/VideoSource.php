<?php

namespace app\modules\dvr\components\onvif\wsdl;

class VideoSource extends DeviceEntity
{

    /**
     * @var float $Framerate
     */
    protected $Framerate = null;

    /**
     * @var VideoResolution $Resolution
     */
    protected $Resolution = null;

    /**
     * @var ImagingSettings $Imaging
     */
    protected $Imaging = null;

    /**
     * @var VideoSourceExtension $Extension
     */
    protected $Extension = null;

    /**
     * @param ReferenceToken $token
     * @param float $Framerate
     * @param VideoResolution $Resolution
     */
    public function __construct($token, $Framerate, $Resolution)
    {
      parent::__construct($token);
      $this->Framerate = $Framerate;
      $this->Resolution = $Resolution;
    }

    /**
     * @return float
     */
    public function getFramerate()
    {
      return $this->Framerate;
    }

    /**
     * @param float $Framerate
     * @return \app\modules\dvr\components\onvif\wsdl\VideoSource
     */
    public function setFramerate($Framerate)
    {
      $this->Framerate = $Framerate;
      return $this;
    }

    /**
     * @return VideoResolution
     */
    public function getResolution()
    {
      return $this->Resolution;
    }

    /**
     * @param VideoResolution $Resolution
     * @return \app\modules\dvr\components\onvif\wsdl\VideoSource
     */
    public function setResolution($Resolution)
    {
      $this->Resolution = $Resolution;
      return $this;
    }

    /**
     * @return ImagingSettings
     */
    public function getImaging()
    {
      return $this->Imaging;
    }

    /**
     * @param ImagingSettings $Imaging
     * @return \app\modules\dvr\components\onvif\wsdl\VideoSource
     */
    public function setImaging($Imaging)
    {
      $this->Imaging = $Imaging;
      return $this;
    }

    /**
     * @return VideoSourceExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param VideoSourceExtension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\VideoSource
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
