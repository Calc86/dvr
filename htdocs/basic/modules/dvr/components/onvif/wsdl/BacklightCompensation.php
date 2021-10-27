<?php

namespace app\modules\dvr\components\onvif\wsdl;

class BacklightCompensation
{

    /**
     * @var BacklightCompensationMode $Mode
     */
    protected $Mode = null;

    /**
     * @var float $Level
     */
    protected $Level = null;

    /**
     * @param BacklightCompensationMode $Mode
     * @param float $Level
     */
    public function __construct($Mode, $Level)
    {
      $this->Mode = $Mode;
      $this->Level = $Level;
    }

    /**
     * @return BacklightCompensationMode
     */
    public function getMode()
    {
      return $this->Mode;
    }

    /**
     * @param BacklightCompensationMode $Mode
     * @return \app\modules\dvr\components\onvif\wsdl\BacklightCompensation
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
     * @return \app\modules\dvr\components\onvif\wsdl\BacklightCompensation
     */
    public function setLevel($Level)
    {
      $this->Level = $Level;
      return $this;
    }

}
