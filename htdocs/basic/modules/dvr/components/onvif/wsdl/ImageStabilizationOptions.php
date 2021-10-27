<?php

namespace app\modules\dvr\components\onvif\wsdl;

class ImageStabilizationOptions
{

    /**
     * @var ImageStabilizationMode[] $Mode
     */
    protected $Mode = null;

    /**
     * @var FloatRange $Level
     */
    protected $Level = null;

    /**
     * @var ImageStabilizationOptionsExtension $Extension
     */
    protected $Extension = null;

    /**
     * @param ImageStabilizationMode[] $Mode
     */
    public function __construct(array $Mode)
    {
      $this->Mode = $Mode;
    }

    /**
     * @return ImageStabilizationMode[]
     */
    public function getMode()
    {
      return $this->Mode;
    }

    /**
     * @param ImageStabilizationMode[] $Mode
     * @return \app\modules\dvr\components\onvif\wsdl\ImageStabilizationOptions
     */
    public function setMode(array $Mode)
    {
      $this->Mode = $Mode;
      return $this;
    }

    /**
     * @return FloatRange
     */
    public function getLevel()
    {
      return $this->Level;
    }

    /**
     * @param FloatRange $Level
     * @return \app\modules\dvr\components\onvif\wsdl\ImageStabilizationOptions
     */
    public function setLevel($Level)
    {
      $this->Level = $Level;
      return $this;
    }

    /**
     * @return ImageStabilizationOptionsExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param ImageStabilizationOptionsExtension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\ImageStabilizationOptions
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
