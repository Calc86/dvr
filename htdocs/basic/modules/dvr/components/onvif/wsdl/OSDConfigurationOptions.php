<?php

namespace app\modules\dvr\components\onvif\wsdl;

class OSDConfigurationOptions
{

    /**
     * @var MaximumNumberOfOSDs $MaximumNumberOfOSDs
     */
    protected $MaximumNumberOfOSDs = null;

    /**
     * @var OSDType[] $Type
     */
    protected $Type = null;

    /**
     * @var string[] $PositionOption
     */
    protected $PositionOption = null;

    /**
     * @var OSDTextOptions $TextOption
     */
    protected $TextOption = null;

    /**
     * @var OSDImgOptions $ImageOption
     */
    protected $ImageOption = null;

    /**
     * @var OSDConfigurationOptionsExtension $Extension
     */
    protected $Extension = null;

    /**
     * @param MaximumNumberOfOSDs $MaximumNumberOfOSDs
     * @param OSDType[] $Type
     * @param string[] $PositionOption
     */
    public function __construct($MaximumNumberOfOSDs, array $Type, array $PositionOption)
    {
      $this->MaximumNumberOfOSDs = $MaximumNumberOfOSDs;
      $this->Type = $Type;
      $this->PositionOption = $PositionOption;
    }

    /**
     * @return MaximumNumberOfOSDs
     */
    public function getMaximumNumberOfOSDs()
    {
      return $this->MaximumNumberOfOSDs;
    }

    /**
     * @param MaximumNumberOfOSDs $MaximumNumberOfOSDs
     * @return \app\modules\dvr\components\onvif\wsdl\OSDConfigurationOptions
     */
    public function setMaximumNumberOfOSDs($MaximumNumberOfOSDs)
    {
      $this->MaximumNumberOfOSDs = $MaximumNumberOfOSDs;
      return $this;
    }

    /**
     * @return OSDType[]
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param OSDType[] $Type
     * @return \app\modules\dvr\components\onvif\wsdl\OSDConfigurationOptions
     */
    public function setType(array $Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getPositionOption()
    {
      return $this->PositionOption;
    }

    /**
     * @param string[] $PositionOption
     * @return \app\modules\dvr\components\onvif\wsdl\OSDConfigurationOptions
     */
    public function setPositionOption(array $PositionOption)
    {
      $this->PositionOption = $PositionOption;
      return $this;
    }

    /**
     * @return OSDTextOptions
     */
    public function getTextOption()
    {
      return $this->TextOption;
    }

    /**
     * @param OSDTextOptions $TextOption
     * @return \app\modules\dvr\components\onvif\wsdl\OSDConfigurationOptions
     */
    public function setTextOption($TextOption)
    {
      $this->TextOption = $TextOption;
      return $this;
    }

    /**
     * @return OSDImgOptions
     */
    public function getImageOption()
    {
      return $this->ImageOption;
    }

    /**
     * @param OSDImgOptions $ImageOption
     * @return \app\modules\dvr\components\onvif\wsdl\OSDConfigurationOptions
     */
    public function setImageOption($ImageOption)
    {
      $this->ImageOption = $ImageOption;
      return $this;
    }

    /**
     * @return OSDConfigurationOptionsExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param OSDConfigurationOptionsExtension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\OSDConfigurationOptions
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
