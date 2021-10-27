<?php

namespace app\modules\dvr\components\onvif\wsdl;

class ImagingOptions20Extension3
{

    /**
     * @var ToneCompensationOptions $ToneCompensationOptions
     */
    protected $ToneCompensationOptions = null;

    /**
     * @var DefoggingOptions $DefoggingOptions
     */
    protected $DefoggingOptions = null;

    /**
     * @var NoiseReductionOptions $NoiseReductionOptions
     */
    protected $NoiseReductionOptions = null;

    /**
     * @var ImagingOptions20Extension4 $Extension
     */
    protected $Extension = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ToneCompensationOptions
     */
    public function getToneCompensationOptions()
    {
      return $this->ToneCompensationOptions;
    }

    /**
     * @param ToneCompensationOptions $ToneCompensationOptions
     * @return \app\modules\dvr\components\onvif\wsdl\ImagingOptions20Extension3
     */
    public function setToneCompensationOptions($ToneCompensationOptions)
    {
      $this->ToneCompensationOptions = $ToneCompensationOptions;
      return $this;
    }

    /**
     * @return DefoggingOptions
     */
    public function getDefoggingOptions()
    {
      return $this->DefoggingOptions;
    }

    /**
     * @param DefoggingOptions $DefoggingOptions
     * @return \app\modules\dvr\components\onvif\wsdl\ImagingOptions20Extension3
     */
    public function setDefoggingOptions($DefoggingOptions)
    {
      $this->DefoggingOptions = $DefoggingOptions;
      return $this;
    }

    /**
     * @return NoiseReductionOptions
     */
    public function getNoiseReductionOptions()
    {
      return $this->NoiseReductionOptions;
    }

    /**
     * @param NoiseReductionOptions $NoiseReductionOptions
     * @return \app\modules\dvr\components\onvif\wsdl\ImagingOptions20Extension3
     */
    public function setNoiseReductionOptions($NoiseReductionOptions)
    {
      $this->NoiseReductionOptions = $NoiseReductionOptions;
      return $this;
    }

    /**
     * @return ImagingOptions20Extension4
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param ImagingOptions20Extension4 $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\ImagingOptions20Extension3
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
