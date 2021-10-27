<?php

namespace app\modules\dvr\components\onvif\wsdl;

class ImageStabilization
{

    /**
     * @var ImageStabilizationMode $Mode
     */
    protected $Mode = null;

    /**
     * @var float $Level
     */
    protected $Level = null;

    /**
     * @var ImageStabilizationExtension $Extension
     */
    protected $Extension = null;

    /**
     * @param ImageStabilizationMode $Mode
     */
    public function __construct($Mode)
    {
      $this->Mode = $Mode;
    }

    /**
     * @return ImageStabilizationMode
     */
    public function getMode()
    {
      return $this->Mode;
    }

    /**
     * @param ImageStabilizationMode $Mode
     * @return \app\modules\dvr\components\onvif\wsdl\ImageStabilization
     */
    public function setMode($Mode)
    {
      $this->Mode = $Mode;
      return $this;
    }

    /**
     * @return float
     */
    public function getLevel()
    {
      return $this->Level;
    }

    /**
     * @param float $Level
     * @return \app\modules\dvr\components\onvif\wsdl\ImageStabilization
     */
    public function setLevel($Level)
    {
      $this->Level = $Level;
      return $this;
    }

    /**
     * @return ImageStabilizationExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param ImageStabilizationExtension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\ImageStabilization
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
