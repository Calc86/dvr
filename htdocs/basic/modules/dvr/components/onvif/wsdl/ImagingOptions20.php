<?php

namespace app\modules\dvr\components\onvif\wsdl;

class ImagingOptions20
{

    /**
     * @var BacklightCompensationOptions20 $BacklightCompensation
     */
    protected $BacklightCompensation = null;

    /**
     * @var FloatRange $Brightness
     */
    protected $Brightness = null;

    /**
     * @var FloatRange $ColorSaturation
     */
    protected $ColorSaturation = null;

    /**
     * @var FloatRange $Contrast
     */
    protected $Contrast = null;

    /**
     * @var ExposureOptions20 $Exposure
     */
    protected $Exposure = null;

    /**
     * @var FocusOptions20 $Focus
     */
    protected $Focus = null;

    /**
     * @var IrCutFilterMode[] $IrCutFilterModes
     */
    protected $IrCutFilterModes = null;

    /**
     * @var FloatRange $Sharpness
     */
    protected $Sharpness = null;

    /**
     * @var WideDynamicRangeOptions20 $WideDynamicRange
     */
    protected $WideDynamicRange = null;

    /**
     * @var WhiteBalanceOptions20 $WhiteBalance
     */
    protected $WhiteBalance = null;

    /**
     * @var ImagingOptions20Extension $Extension
     */
    protected $Extension = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BacklightCompensationOptions20
     */
    public function getBacklightCompensation()
    {
      return $this->BacklightCompensation;
    }

    /**
     * @param BacklightCompensationOptions20 $BacklightCompensation
     * @return \app\modules\dvr\components\onvif\wsdl\ImagingOptions20
     */
    public function setBacklightCompensation($BacklightCompensation)
    {
      $this->BacklightCompensation = $BacklightCompensation;
      return $this;
    }

    /**
     * @return FloatRange
     */
    public function getBrightness()
    {
      return $this->Brightness;
    }

    /**
     * @param FloatRange $Brightness
     * @return \app\modules\dvr\components\onvif\wsdl\ImagingOptions20
     */
    public function setBrightness($Brightness)
    {
      $this->Brightness = $Brightness;
      return $this;
    }

    /**
     * @return FloatRange
     */
    public function getColorSaturation()
    {
      return $this->ColorSaturation;
    }

    /**
     * @param FloatRange $ColorSaturation
     * @return \app\modules\dvr\components\onvif\wsdl\ImagingOptions20
     */
    public function setColorSaturation($ColorSaturation)
    {
      $this->ColorSaturation = $ColorSaturation;
      return $this;
    }

    /**
     * @return FloatRange
     */
    public function getContrast()
    {
      return $this->Contrast;
    }

    /**
     * @param FloatRange $Contrast
     * @return \app\modules\dvr\components\onvif\wsdl\ImagingOptions20
     */
    public function setContrast($Contrast)
    {
      $this->Contrast = $Contrast;
      return $this;
    }

    /**
     * @return ExposureOptions20
     */
    public function getExposure()
    {
      return $this->Exposure;
    }

    /**
     * @param ExposureOptions20 $Exposure
     * @return \app\modules\dvr\components\onvif\wsdl\ImagingOptions20
     */
    public function setExposure($Exposure)
    {
      $this->Exposure = $Exposure;
      return $this;
    }

    /**
     * @return FocusOptions20
     */
    public function getFocus()
    {
      return $this->Focus;
    }

    /**
     * @param FocusOptions20 $Focus
     * @return \app\modules\dvr\components\onvif\wsdl\ImagingOptions20
     */
    public function setFocus($Focus)
    {
      $this->Focus = $Focus;
      return $this;
    }

    /**
     * @return IrCutFilterMode[]
     */
    public function getIrCutFilterModes()
    {
      return $this->IrCutFilterModes;
    }

    /**
     * @param IrCutFilterMode[] $IrCutFilterModes
     * @return \app\modules\dvr\components\onvif\wsdl\ImagingOptions20
     */
    public function setIrCutFilterModes(array $IrCutFilterModes = null)
    {
      $this->IrCutFilterModes = $IrCutFilterModes;
      return $this;
    }

    /**
     * @return FloatRange
     */
    public function getSharpness()
    {
      return $this->Sharpness;
    }

    /**
     * @param FloatRange $Sharpness
     * @return \app\modules\dvr\components\onvif\wsdl\ImagingOptions20
     */
    public function setSharpness($Sharpness)
    {
      $this->Sharpness = $Sharpness;
      return $this;
    }

    /**
     * @return WideDynamicRangeOptions20
     */
    public function getWideDynamicRange()
    {
      return $this->WideDynamicRange;
    }

    /**
     * @param WideDynamicRangeOptions20 $WideDynamicRange
     * @return \app\modules\dvr\components\onvif\wsdl\ImagingOptions20
     */
    public function setWideDynamicRange($WideDynamicRange)
    {
      $this->WideDynamicRange = $WideDynamicRange;
      return $this;
    }

    /**
     * @return WhiteBalanceOptions20
     */
    public function getWhiteBalance()
    {
      return $this->WhiteBalance;
    }

    /**
     * @param WhiteBalanceOptions20 $WhiteBalance
     * @return \app\modules\dvr\components\onvif\wsdl\ImagingOptions20
     */
    public function setWhiteBalance($WhiteBalance)
    {
      $this->WhiteBalance = $WhiteBalance;
      return $this;
    }

    /**
     * @return ImagingOptions20Extension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param ImagingOptions20Extension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\ImagingOptions20
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
