<?php

namespace app\modules\dvr\components\onvif\wsdl;

class FocusConfiguration20
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
     * @var FocusConfiguration20Extension $Extension
     */
    protected $Extension = null;

    /**
     * @var StringAttrList $AFMode
     */
    protected $AFMode = null;

    /**
     * @param AutoFocusMode $AutoFocusMode
     * @param StringAttrList $AFMode
     */
    public function __construct($AutoFocusMode, $AFMode)
    {
      $this->AutoFocusMode = $AutoFocusMode;
      $this->AFMode = $AFMode;
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
     * @return \app\modules\dvr\components\onvif\wsdl\FocusConfiguration20
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
     * @return \app\modules\dvr\components\onvif\wsdl\FocusConfiguration20
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
     * @return \app\modules\dvr\components\onvif\wsdl\FocusConfiguration20
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
     * @return \app\modules\dvr\components\onvif\wsdl\FocusConfiguration20
     */
    public function setFarLimit($FarLimit)
    {
      $this->FarLimit = $FarLimit;
      return $this;
    }

    /**
     * @return FocusConfiguration20Extension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param FocusConfiguration20Extension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\FocusConfiguration20
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

    /**
     * @return StringAttrList
     */
    public function getAFMode()
    {
      return $this->AFMode;
    }

    /**
     * @param StringAttrList $AFMode
     * @return \app\modules\dvr\components\onvif\wsdl\FocusConfiguration20
     */
    public function setAFMode($AFMode)
    {
      $this->AFMode = $AFMode;
      return $this;
    }

}
