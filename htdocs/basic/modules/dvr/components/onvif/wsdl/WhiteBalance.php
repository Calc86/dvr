<?php

namespace app\modules\dvr\components\onvif\wsdl;

class WhiteBalance
{

    /**
     * @var WhiteBalanceMode $Mode
     */
    protected $Mode = null;

    /**
     * @var float $CrGain
     */
    protected $CrGain = null;

    /**
     * @var float $CbGain
     */
    protected $CbGain = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param WhiteBalanceMode $Mode
     * @param float $CrGain
     * @param float $CbGain
     * @param string $any
     */
    public function __construct($Mode, $CrGain, $CbGain, $any)
    {
      $this->Mode = $Mode;
      $this->CrGain = $CrGain;
      $this->CbGain = $CbGain;
      $this->any = $any;
    }

    /**
     * @return WhiteBalanceMode
     */
    public function getMode()
    {
      return $this->Mode;
    }

    /**
     * @param WhiteBalanceMode $Mode
     * @return \app\modules\dvr\components\onvif\wsdl\WhiteBalance
     */
    public function setMode($Mode)
    {
      $this->Mode = $Mode;
      return $this;
    }

    /**
     * @return float
     */
    public function getCrGain()
    {
      return $this->CrGain;
    }

    /**
     * @param float $CrGain
     * @return \app\modules\dvr\components\onvif\wsdl\WhiteBalance
     */
    public function setCrGain($CrGain)
    {
      $this->CrGain = $CrGain;
      return $this;
    }

    /**
     * @return float
     */
    public function getCbGain()
    {
      return $this->CbGain;
    }

    /**
     * @param float $CbGain
     * @return \app\modules\dvr\components\onvif\wsdl\WhiteBalance
     */
    public function setCbGain($CbGain)
    {
      $this->CbGain = $CbGain;
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
     * @return \app\modules\dvr\components\onvif\wsdl\WhiteBalance
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
