<?php

namespace app\modules\dvr\components\onvif\wsdl;

class WideDynamicRange20
{

    /**
     * @var WideDynamicMode $Mode
     */
    protected $Mode = null;

    /**
     * @var float $Level
     */
    protected $Level = null;

    /**
     * @param WideDynamicMode $Mode
     */
    public function __construct($Mode)
    {
      $this->Mode = $Mode;
    }

    /**
     * @return WideDynamicMode
     */
    public function getMode()
    {
      return $this->Mode;
    }

    /**
     * @param WideDynamicMode $Mode
     * @return \app\modules\dvr\components\onvif\wsdl\WideDynamicRange20
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
     * @return \app\modules\dvr\components\onvif\wsdl\WideDynamicRange20
     */
    public function setLevel($Level)
    {
      $this->Level = $Level;
      return $this;
    }

}
