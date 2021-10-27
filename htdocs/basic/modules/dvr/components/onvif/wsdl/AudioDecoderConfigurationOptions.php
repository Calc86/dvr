<?php

namespace app\modules\dvr\components\onvif\wsdl;

class AudioDecoderConfigurationOptions
{

    /**
     * @var AACDecOptions $AACDecOptions
     */
    protected $AACDecOptions = null;

    /**
     * @var G711DecOptions $G711DecOptions
     */
    protected $G711DecOptions = null;

    /**
     * @var G726DecOptions $G726DecOptions
     */
    protected $G726DecOptions = null;

    /**
     * @var AudioDecoderConfigurationOptionsExtension $Extension
     */
    protected $Extension = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AACDecOptions
     */
    public function getAACDecOptions()
    {
      return $this->AACDecOptions;
    }

    /**
     * @param AACDecOptions $AACDecOptions
     * @return \app\modules\dvr\components\onvif\wsdl\AudioDecoderConfigurationOptions
     */
    public function setAACDecOptions($AACDecOptions)
    {
      $this->AACDecOptions = $AACDecOptions;
      return $this;
    }

    /**
     * @return G711DecOptions
     */
    public function getG711DecOptions()
    {
      return $this->G711DecOptions;
    }

    /**
     * @param G711DecOptions $G711DecOptions
     * @return \app\modules\dvr\components\onvif\wsdl\AudioDecoderConfigurationOptions
     */
    public function setG711DecOptions($G711DecOptions)
    {
      $this->G711DecOptions = $G711DecOptions;
      return $this;
    }

    /**
     * @return G726DecOptions
     */
    public function getG726DecOptions()
    {
      return $this->G726DecOptions;
    }

    /**
     * @param G726DecOptions $G726DecOptions
     * @return \app\modules\dvr\components\onvif\wsdl\AudioDecoderConfigurationOptions
     */
    public function setG726DecOptions($G726DecOptions)
    {
      $this->G726DecOptions = $G726DecOptions;
      return $this;
    }

    /**
     * @return AudioDecoderConfigurationOptionsExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param AudioDecoderConfigurationOptionsExtension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\AudioDecoderConfigurationOptions
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
