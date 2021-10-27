<?php

namespace app\modules\dvr\components\onvif\wsdl;

class WhiteBalance20
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
     * @var WhiteBalance20Extension $Extension
     */
    protected $Extension = null;

    /**
     * @param WhiteBalanceMode $Mode
     */
    public function __construct($Mode)
    {
      $this->Mode = $Mode;
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
     * @return \app\modules\dvr\components\onvif\wsdl\WhiteBalance20
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
     * @return \app\modules\dvr\components\onvif\wsdl\WhiteBalance20
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
     * @return \app\modules\dvr\components\onvif\wsdl\WhiteBalance20
     */
    public function setCbGain($CbGain)
    {
      $this->CbGain = $CbGain;
      return $this;
    }

    /**
     * @return WhiteBalance20Extension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param WhiteBalance20Extension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\WhiteBalance20
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
