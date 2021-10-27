<?php

namespace app\modules\dvr\components\onvif\wsdl;

class FocusOptions20
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
     * @var FocusOptions20Extension $Extension
     */
    protected $Extension = null;

    
    public function __construct()
    {
    
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
     * @return \app\modules\dvr\components\onvif\wsdl\FocusOptions20
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
     * @return \app\modules\dvr\components\onvif\wsdl\FocusOptions20
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
     * @return \app\modules\dvr\components\onvif\wsdl\FocusOptions20
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
     * @return \app\modules\dvr\components\onvif\wsdl\FocusOptions20
     */
    public function setFarLimit($FarLimit)
    {
      $this->FarLimit = $FarLimit;
      return $this;
    }

    /**
     * @return FocusOptions20Extension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param FocusOptions20Extension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\FocusOptions20
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
