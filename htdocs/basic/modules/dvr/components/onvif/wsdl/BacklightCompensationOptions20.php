<?php

namespace app\modules\dvr\components\onvif\wsdl;

class BacklightCompensationOptions20
{

    /**
     * @var BacklightCompensationMode[] $Mode
     */
    protected $Mode = null;

    /**
     * @var FloatRange $Level
     */
    protected $Level = null;

    /**
     * @param BacklightCompensationMode[] $Mode
     */
    public function __construct(array $Mode)
    {
      $this->Mode = $Mode;
    }

    /**
     * @return BacklightCompensationMode[]
     */
    public function getMode()
    {
      return $this->Mode;
    }

    /**
     * @param BacklightCompensationMode[] $Mode
     * @return \app\modules\dvr\components\onvif\wsdl\BacklightCompensationOptions20
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
     * @return \app\modules\dvr\components\onvif\wsdl\BacklightCompensationOptions20
     */
    public function setLevel($Level)
    {
      $this->Level = $Level;
      return $this;
    }

}
