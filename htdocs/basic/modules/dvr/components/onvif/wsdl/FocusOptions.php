<?php

namespace app\modules\dvr\components\onvif\wsdl;

class FocusOptions
{

    /**
     * @var AutoFocusMode[] $AutoFocusModes
     */
    protected $AutoFocusModes = null;

    /**
     * @var FloatRange $DefaultSpeed
     */
    protected $DefaultSpeed = null;

    /**
     * @var FloatRange $NearLimit
     */
    protected $NearLimit = null;

    /**
     * @var FloatRange $FarLimit
     */
    protected $FarLimit = null;

    /**
     * @param FloatRange $DefaultSpeed
     * @param FloatRange $NearLimit
     * @param FloatRange $FarLimit
     */
    public function __construct($DefaultSpeed, $NearLimit, $FarLimit)
    {
      $this->DefaultSpeed = $DefaultSpeed;
      $this->NearLimit = $NearLimit;
      $this->FarLimit = $FarLimit;
    }

    /**
     * @return AutoFocusMode[]
     */
    public function getAutoFocusModes()
    {
      return $this->AutoFocusModes;
    }

    /**
     * @param AutoFocusMode[] $AutoFocusModes
     * @return \app\modules\dvr\components\onvif\wsdl\FocusOptions
     */
    public function setAutoFocusModes(array $AutoFocusModes = null)
    {
      $this->AutoFocusModes = $AutoFocusModes;
      return $this;
    }

    /**
     * @return FloatRange
     */
    public function getDefaultSpeed()
    {
      return $this->DefaultSpeed;
    }

    /**
     * @param FloatRange $DefaultSpeed
     * @return \app\modules\dvr\components\onvif\wsdl\FocusOptions
     */
    public function setDefaultSpeed($DefaultSpeed)
    {
      $this->DefaultSpeed = $DefaultSpeed;
      return $this;
    }

    /**
     * @return FloatRange
     */
    public function getNearLimit()
    {
      return $this->NearLimit;
    }

    /**
     * @param FloatRange $NearLimit
     * @return \app\modules\dvr\components\onvif\wsdl\FocusOptions
     */
    public function setNearLimit($NearLimit)
    {
      $this->NearLimit = $NearLimit;
      return $this;
    }

    /**
     * @return FloatRange
     */
    public function getFarLimit()
    {
      return $this->FarLimit;
    }

    /**
     * @param FloatRange $FarLimit
     * @return \app\modules\dvr\components\onvif\wsdl\FocusOptions
     */
    public function setFarLimit($FarLimit)
    {
      $this->FarLimit = $FarLimit;
      return $this;
    }

}
