<?php

namespace app\modules\dvr\components\onvif\wsdl;

class ImagingSettings20
{

    /**
     * @var BacklightCompensation20 $BacklightCompensation
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
     * @var Exposure20 $Exposure
     */
    protected $Exposure = null;

    /**
     * @var FocusConfiguration20 $Focus
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
     * @var WideDynamicRange20 $WideDynamicRange
     */
    protected $WideDynamicRange = null;

    /**
     * @var WhiteBalance20 $WhiteBalance
     */
    protected $WhiteBalance = null;

    /**
     * @var ImagingSettingsExtension20 $Extension
     */
    protected $Extension = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BacklightCompensation20
     */
    public function getBacklightCompensation()
    {
      return $this->BacklightCompensation;
    }

    /**
     * @param BacklightCompensation20 $BacklightCompensation
     * @return \app\modules\dvr\components\onvif\wsdl\ImagingSettings20
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
     * @return \app\modules\dvr\components\onvif\wsdl\ImagingSettings20
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
     * @return \app\modules\dvr\components\onvif\wsdl\ImagingSettings20
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
     * @return \app\modules\dvr\components\onvif\wsdl\ImagingSettings20
     */
    public function setContrast($Contrast)
    {
      $this->Contrast = $Contrast;
      return $this;
    }

    /**
     * @return Exposure20
     */
    public function getExposure()
    {
      return $this->Exposure;
    }

    /**
     * @param Exposure20 $Exposure
     * @return \app\modules\dvr\components\onvif\wsdl\ImagingSettings20
     */
    public function setExposure($Exposure)
    {
      $this->Exposure = $Exposure;
      return $this;
    }

    /**
     * @return FocusConfiguration20
     */
    public function getFocus()
    {
      return $this->Focus;
    }

    /**
     * @param FocusConfiguration20 $Focus
     * @return \app\modules\dvr\components\onvif\wsdl\ImagingSettings20
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
     * @return \app\modules\dvr\components\onvif\wsdl\ImagingSettings20
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
     * @return \app\modules\dvr\components\onvif\wsdl\ImagingSettings20
     */
    public function setSharpness($Sharpness)
    {
      $this->Sharpness = $Sharpness;
      return $this;
    }

    /**
     * @return WideDynamicRange20
     */
    public function getWideDynamicRange()
    {
      return $this->WideDynamicRange;
    }

    /**
     * @param WideDynamicRange20 $WideDynamicRange
     * @return \app\modules\dvr\components\onvif\wsdl\ImagingSettings20
     */
    public function setWideDynamicRange($WideDynamicRange)
    {
      $this->WideDynamicRange = $WideDynamicRange;
      return $this;
    }

    /**
     * @return WhiteBalance20
     */
    public function getWhiteBalance()
    {
      return $this->WhiteBalance;
    }

    /**
     * @param WhiteBalance20 $WhiteBalance
     * @return \app\modules\dvr\components\onvif\wsdl\ImagingSettings20
     */
    public function setWhiteBalance($WhiteBalance)
    {
      $this->WhiteBalance = $WhiteBalance;
      return $this;
    }

    /**
     * @return ImagingSettingsExtension20
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param ImagingSettingsExtension20 $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\ImagingSettings20
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
