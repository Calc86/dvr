<?php

namespace app\modules\dvr\components\onvif\wsdl;

class ImagingSettingsExtension20
{

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var ImageStabilization $ImageStabilization
     */
    protected $ImageStabilization = null;

    /**
     * @var ImagingSettingsExtension202 $Extension
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
     * @return \app\modules\dvr\components\onvif\wsdl\ImagingSettingsExtension20
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return ImageStabilization
     */
    public function getImageStabilization()
    {
      return $this->ImageStabilization;
    }

    /**
     * @param ImageStabilization $ImageStabilization
     * @return \app\modules\dvr\components\onvif\wsdl\ImagingSettingsExtension20
     */
    public function setImageStabilization($ImageStabilization)
    {
      $this->ImageStabilization = $ImageStabilization;
      return $this;
    }

    /**
     * @return ImagingSettingsExtension202
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param ImagingSettingsExtension202 $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\ImagingSettingsExtension20
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
