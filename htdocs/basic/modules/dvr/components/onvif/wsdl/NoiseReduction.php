<?php

namespace app\modules\dvr\components\onvif\wsdl;

class NoiseReduction
{

    /**
     * @var float $Level
     */
    protected $Level = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param float $Level
     * @param string $any
     */
    public function __construct($Level, $any)
    {
      $this->Level = $Level;
      $this->any = $any;
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
     * @return \app\modules\dvr\components\onvif\wsdl\NoiseReduction
     */
    public function setLevel($Level)
    {
      $this->Level = $Level;
      return $this;
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
     * @return \app\modules\dvr\components\onvif\wsdl\NoiseReduction
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
