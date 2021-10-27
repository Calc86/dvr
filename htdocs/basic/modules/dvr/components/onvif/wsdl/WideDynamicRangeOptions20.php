<?php

namespace app\modules\dvr\components\onvif\wsdl;

class WideDynamicRangeOptions20
{

    /**
     * @var WideDynamicMode[] $Mode
     */
    protected $Mode = null;

    /**
     * @var FloatRange $Level
     */
    protected $Level = null;

    /**
     * @param WideDynamicMode[] $Mode
     */
    public function __construct(array $Mode)
    {
      $this->Mode = $Mode;
    }

    /**
     * @return WideDynamicMode[]
     */
    public function getMode()
    {
      return $this->Mode;
    }

    /**
     * @param WideDynamicMode[] $Mode
     * @return \app\modules\dvr\components\onvif\wsdl\WideDynamicRangeOptions20
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
     * @return \app\modules\dvr\components\onvif\wsdl\WideDynamicRangeOptions20
     */
    public function setLevel($Level)
    {
      $this->Level = $Level;
      return $this;
    }

}
