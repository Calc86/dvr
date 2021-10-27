<?php

namespace app\modules\dvr\components\onvif\wsdl;

class ContinuousFocus
{

    /**
     * @var float $Speed
     */
    protected $Speed = null;

    /**
     * @param float $Speed
     */
    public function __construct($Speed)
    {
      $this->Speed = $Speed;
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
     * @return \app\modules\dvr\components\onvif\wsdl\ContinuousFocus
     */
    public function setSpeed($Speed)
    {
      $this->Speed = $Speed;
      return $this;
    }

}
