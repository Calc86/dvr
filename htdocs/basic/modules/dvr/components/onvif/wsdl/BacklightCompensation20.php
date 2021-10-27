<?php

namespace app\modules\dvr\components\onvif\wsdl;

class BacklightCompensation20
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
     */
    public function __construct($Mode)
    {
      $this->Mode = $Mode;
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
     * @return \app\modules\dvr\components\onvif\wsdl\BacklightCompensation20
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
     * @return \app\modules\dvr\components\onvif\wsdl\BacklightCompensation20
     */
    public function setLevel($Level)
    {
      $this->Level = $Level;
      return $this;
    }

}
