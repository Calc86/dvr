<?php

namespace app\modules\dvr\components\onvif\wsdl;

class OSDColorOptions
{

    /**
     * @var ColorOptions $Color
     */
    protected $Color = null;

    /**
     * @var IntRange $Transparent
     */
    protected $Transparent = null;

    /**
     * @var OSDColorOptionsExtension $Extension
     */
    protected $Extension = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ColorOptions
     */
    public function getColor()
    {
      return $this->Color;
    }

    /**
     * @param ColorOptions $Color
     * @return \app\modules\dvr\components\onvif\wsdl\OSDColorOptions
     */
    public function setColor($Color)
    {
      $this->Color = $Color;
      return $this;
    }

    /**
     * @return IntRange
     */
    public function getTransparent()
    {
      return $this->Transparent;
    }

    /**
     * @param IntRange $Transparent
     * @return \app\modules\dvr\components\onvif\wsdl\OSDColorOptions
     */
    public function setTransparent($Transparent)
    {
      $this->Transparent = $Transparent;
      return $this;
    }

    /**
     * @return OSDColorOptionsExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param OSDColorOptionsExtension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\OSDColorOptions
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
