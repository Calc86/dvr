<?php

namespace app\modules\dvr\components\onvif\wsdl;

class WhiteBalanceOptions
{

    /**
     * @var WhiteBalanceMode[] $Mode
     */
    protected $Mode = null;

    /**
     * @var FloatRange $YrGain
     */
    protected $YrGain = null;

    /**
     * @var FloatRange $YbGain
     */
    protected $YbGain = null;

    /**
     * @param WhiteBalanceMode[] $Mode
     * @param FloatRange $YrGain
     * @param FloatRange $YbGain
     */
    public function __construct(array $Mode, $YrGain, $YbGain)
    {
      $this->Mode = $Mode;
      $this->YrGain = $YrGain;
      $this->YbGain = $YbGain;
    }

    /**
     * @return WhiteBalanceMode[]
     */
    public function getMode()
    {
      return $this->Mode;
    }

    /**
     * @param WhiteBalanceMode[] $Mode
     * @return \app\modules\dvr\components\onvif\wsdl\WhiteBalanceOptions
     */
    public function setMode(array $Mode)
    {
      $this->Mode = $Mode;
      return $this;
    }

    /**
     * @return FloatRange
     */
    public function getYrGain()
    {
      return $this->YrGain;
    }

    /**
     * @param FloatRange $YrGain
     * @return \app\modules\dvr\components\onvif\wsdl\WhiteBalanceOptions
     */
    public function setYrGain($YrGain)
    {
      $this->YrGain = $YrGain;
      return $this;
    }

    /**
     * @return FloatRange
     */
    public function getYbGain()
    {
      return $this->YbGain;
    }

    /**
     * @param FloatRange $YbGain
     * @return \app\modules\dvr\components\onvif\wsdl\WhiteBalanceOptions
     */
    public function setYbGain($YbGain)
    {
      $this->YbGain = $YbGain;
      return $this;
    }

}
