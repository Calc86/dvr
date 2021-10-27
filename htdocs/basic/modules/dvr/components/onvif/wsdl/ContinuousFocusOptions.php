<?php

namespace app\modules\dvr\components\onvif\wsdl;

class ContinuousFocusOptions
{

    /**
     * @var FloatRange $Speed
     */
    protected $Speed = null;

    /**
     * @param FloatRange $Speed
     */
    public function __construct($Speed)
    {
      $this->Speed = $Speed;
    }

    /**
     * @return FloatRange
     */
    public function getSpeed()
    {
      return $this->Speed;
    }

    /**
     * @param FloatRange $Speed
     * @return \app\modules\dvr\components\onvif\wsdl\ContinuousFocusOptions
     */
    public function setSpeed($Speed)
    {
      $this->Speed = $Speed;
      return $this;
    }

}
