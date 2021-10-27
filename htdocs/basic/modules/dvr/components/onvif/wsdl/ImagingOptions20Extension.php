<?php

namespace app\modules\dvr\components\onvif\wsdl;

class ImagingOptions20Extension
{

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var ImageStabilizationOptions $ImageStabilization
     */
    protected $ImageStabilization = null;

    /**
     * @var ImagingOptions20Extension2 $Extension
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
     * @return \app\modules\dvr\components\onvif\wsdl\ImagingOptions20Extension
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return ImageStabilizationOptions
     */
    public function getImageStabilization()
    {
      return $this->ImageStabilization;
    }

    /**
     * @param ImageStabilizationOptions $ImageStabilization
     * @return \app\modules\dvr\components\onvif\wsdl\ImagingOptions20Extension
     */
    public function setImageStabilization($ImageStabilization)
    {
      $this->ImageStabilization = $ImageStabilization;
      return $this;
    }

    /**
     * @return ImagingOptions20Extension2
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param ImagingOptions20Extension2 $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\ImagingOptions20Extension
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
