<?php

namespace app\modules\dvr\components\onvif\wsdl;

class WhiteBalanceOptions20
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
     * @var WhiteBalanceOptions20Extension $Extension
     */
    protected $Extension = null;

    /**
     * @param WhiteBalanceMode[] $Mode
     */
    public function __construct(array $Mode)
    {
      $this->Mode = $Mode;
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
     * @return \app\modules\dvr\components\onvif\wsdl\WhiteBalanceOptions20
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
     * @return \app\modules\dvr\components\onvif\wsdl\WhiteBalanceOptions20
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
     * @return \app\modules\dvr\components\onvif\wsdl\WhiteBalanceOptions20
     */
    public function setYbGain($YbGain)
    {
      $this->YbGain = $YbGain;
      return $this;
    }

    /**
     * @return WhiteBalanceOptions20Extension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param WhiteBalanceOptions20Extension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\WhiteBalanceOptions20
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
