<?php

namespace app\modules\dvr\components\onvif\wsdl;

class FocusConfiguration
{

    /**
     * @var AutoFocusMode $AutoFocusMode
     */
    protected $AutoFocusMode = null;

    /**
     * @var float $DefaultSpeed
     */
    protected $DefaultSpeed = null;

    /**
     * @var float $NearLimit
     */
    protected $NearLimit = null;

    /**
     * @var float $FarLimit
     */
    protected $FarLimit = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param AutoFocusMode $AutoFocusMode
     * @param float $DefaultSpeed
     * @param float $NearLimit
     * @param float $FarLimit
     * @param string $any
     */
    public function __construct($AutoFocusMode, $DefaultSpeed, $NearLimit, $FarLimit, $any)
    {
      $this->AutoFocusMode = $AutoFocusMode;
      $this->DefaultSpeed = $DefaultSpeed;
      $this->NearLimit = $NearLimit;
      $this->FarLimit = $FarLimit;
      $this->any = $any;
    }

    /**
     * @return AutoFocusMode
     */
    public function getAutoFocusMode()
    {
      return $this->AutoFocusMode;
    }

    /**
     * @param AutoFocusMode $AutoFocusMode
     * @return \app\modules\dvr\components\onvif\wsdl\FocusConfiguration
     */
    public function setAutoFocusMode($AutoFocusMode)
    {
      $this->AutoFocusMode = $AutoFocusMode;
      return $this;
    }

    /**
     * @return float
     */
    public function getDefaultSpeed()
    {
      return $this->DefaultSpeed;
    }

    /**
     * @param float $DefaultSpeed
     * @return \app\modules\dvr\components\onvif\wsdl\FocusConfiguration
     */
    public function setDefaultSpeed($DefaultSpeed)
    {
      $this->DefaultSpeed = $DefaultSpeed;
      return $this;
    }

    /**
     * @return float
     */
    public function getNearLimit()
    {
      return $this->NearLimit;
    }

    /**
     * @param float $NearLimit
     * @return \app\modules\dvr\components\onvif\wsdl\FocusConfiguration
     */
    public function setNearLimit($NearLimit)
    {
      $this->NearLimit = $NearLimit;
      return $this;
    }

    /**
     * @return float
     */
    public function getFarLimit()
    {
      return $this->FarLimit;
    }

    /**
     * @param float $FarLimit
     * @return \app\modules\dvr\components\onvif\wsdl\FocusConfiguration
     */
    public function setFarLimit($FarLimit)
    {
      $this->FarLimit = $FarLimit;
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
     * @return \app\modules\dvr\components\onvif\wsdl\FocusConfiguration
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
