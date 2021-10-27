<?php

namespace app\modules\dvr\components\onvif\wsdl;

class RelativeFocus
{

    /**
     * @var float $Distance
     */
    protected $Distance = null;

    /**
     * @var float $Speed
     */
    protected $Speed = null;

    /**
     * @param float $Distance
     */
    public function __construct($Distance)
    {
      $this->Distance = $Distance;
    }

    /**
     * @return float
     */
    public function getDistance()
    {
      return $this->Distance;
    }

    /**
     * @param float $Distance
     * @return \app\modules\dvr\components\onvif\wsdl\RelativeFocus
     */
    public function setDistance($Distance)
    {
      $this->Distance = $Distance;
      return $this;
    }

    /**
     * @return float
     */
    public function getSpeed()
    {
      return $this->Speed;
    }

    /**
     * @param float $Speed
     * @return \app\modules\dvr\components\onvif\wsdl\RelativeFocus
     */
    public function setSpeed($Speed)
    {
      $this->Speed = $Speed;
      return $this;
    }

}
