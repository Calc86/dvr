<?php

namespace app\modules\dvr\components\onvif\wsdl;

class ImagingSettings
{

    /**
     * @var BacklightCompensation $BacklightCompensation
     */
    protected $BacklightCompensation = null;

    /**
     * @var float $Brightness
     */
    protected $Brightness = null;

    /**
     * @var float $ColorSaturation
     */
    protected $ColorSaturation = null;

    /**
     * @var float $Contrast
     */
    protected $Contrast = null;

    /**
     * @var Exposure $Exposure
     */
    protected $Exposure = null;

    /**
     * @var FocusConfiguration $Focus
     */
    protected $Focus = null;

    /**
     * @var IrCutFilterMode $IrCutFilter
     */
    protected $IrCutFilter = null;

    /**
     * @var float $Sharpness
     */
    protected $Sharpness = null;

    /**
     * @var WideDynamicRange $WideDynamicRange
     */
    protected $WideDynamicRange = null;

    /**
     * @var WhiteBalance $WhiteBalance
     */
    protected $WhiteBalance = null;

    /**
     * @var ImagingSettingsExtension $Extension
     */
    protected $Extension = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BacklightCompensation
     */
    public function getBacklightCompensation()
    {
      return $this->BacklightCompensation;
    }

    /**
     * @param BacklightCompensation $BacklightCompensation
     * @return \app\modules\dvr\components\onvif\wsdl\ImagingSettings
     */
    public function setBacklightCompensation($BacklightCompensation)
    {
      $this->BacklightCompensation = $BacklightCompensation;
      return $this;
    }

    /**
     * @return float
     */
    public function getBrightness()
    {
      return $this->Brightness;
    }

    /**
     * @param float $Brightness
     * @return \app\modules\dvr\components\onvif\wsdl\ImagingSettings
     */
    public function setBrightness($Brightness)
    {
      $this->Brightness = $Brightness;
      return $this;
    }

    /**
     * @return float
     */
    public function getColorSaturation()
    {
      return $this->ColorSaturation;
    }

    /**
     * @param float $ColorSaturation
     * @return \app\modules\dvr\components\onvif\wsdl\ImagingSettings
     */
    public function setColorSaturation($ColorSaturation)
    {
      $this->ColorSaturation = $ColorSaturation;
      return $this;
    }

    /**
     * @return float
     */
    public function getContrast()
    {
      return $this->Contrast;
    }

    /**
     * @param float $Contrast
     * @return \app\modules\dvr\components\onvif\wsdl\ImagingSettings
     */
    public function setContrast($Contrast)
    {
      $this->Contrast = $Contrast;
      return $this;
    }

    /**
     * @return Exposure
     */
    public function getExposure()
    {
      return $this->Exposure;
    }

    /**
     * @param Exposure $Exposure
     * @return \app\modules\dvr\components\onvif\wsdl\ImagingSettings
     */
    public function setExposure($Exposure)
    {
      $this->Exposure = $Exposure;
      return $this;
    }

    /**
     * @return FocusConfiguration
     */
    public function getFocus()
    {
      return $this->Focus;
    }

    /**
     * @param FocusConfiguration $Focus
     * @return \app\modules\dvr\components\onvif\wsdl\ImagingSettings
     */
    public function setFocus($Focus)
    {
      $this->Focus = $Focus;
      return $this;
    }

    /**
     * @return IrCutFilterMode
     */
    public function getIrCutFilter()
    {
      return $this->IrCutFilter;
    }

    /**
     * @param IrCutFilterMode $IrCutFilter
     * @return \app\modules\dvr\components\onvif\wsdl\ImagingSettings
     */
    public function setIrCutFilter($IrCutFilter)
    {
      $this->IrCutFilter = $IrCutFilter;
      return $this;
    }

    /**
     * @return float
     */
    public function getSharpness()
    {
      return $this->Sharpness;
    }

    /**
     * @param float $Sharpness
     * @return \app\modules\dvr\components\onvif\wsdl\ImagingSettings
     */
    public function setSharpness($Sharpness)
    {
      $this->Sharpness = $Sharpness;
      return $this;
    }

    /**
     * @return WideDynamicRange
     */
    public function getWideDynamicRange()
    {
      return $this->WideDynamicRange;
    }

    /**
     * @param WideDynamicRange $WideDynamicRange
     * @return \app\modules\dvr\components\onvif\wsdl\ImagingSettings
     */
    public function setWideDynamicRange($WideDynamicRange)
    {
      $this->WideDynamicRange = $WideDynamicRange;
      return $this;
    }

    /**
     * @return WhiteBalance
     */
    public function getWhiteBalance()
    {
      return $this->WhiteBalance;
    }

    /**
     * @param WhiteBalance $WhiteBalance
     * @return \app\modules\dvr\components\onvif\wsdl\ImagingSettings
     */
    public function setWhiteBalance($WhiteBalance)
    {
      $this->WhiteBalance = $WhiteBalance;
      return $this;
    }

    /**
     * @return ImagingSettingsExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param ImagingSettingsExtension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\ImagingSettings
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
