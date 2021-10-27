<?php

namespace app\modules\dvr\components\onvif\wsdl;

class AbsoluteFocusOptions
{

    /**
     * @var FloatRange $Position
     */
    protected $Position = null;

    /**
     * @var FloatRange $Speed
     */
    protected $Speed = null;

    /**
     * @param FloatRange $Position
     */
    public function __construct($Position)
    {
      $this->Position = $Position;
    }

    /**
     * @return FloatRange
     */
    public function getPosition()
    {
      return $this->Position;
    }

    /**
     * @param FloatRange $Position
     * @return \app\modules\dvr\components\onvif\wsdl\AbsoluteFocusOptions
     */
    public function setPosition($Position)
    {
      $this->Position = $Position;
      return $this;
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
     * @return \app\modules\dvr\components\onvif\wsdl\AbsoluteFocusOptions
     */
    public function setSpeed($Speed)
    {
      $this->Speed = $Speed;
      return $this;
    }

}
