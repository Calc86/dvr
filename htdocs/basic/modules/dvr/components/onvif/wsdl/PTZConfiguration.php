<?php

namespace app\modules\dvr\components\onvif\wsdl;

class PTZConfiguration extends ConfigurationEntity
{

    /**
     * @var ReferenceToken $NodeToken
     */
    protected $NodeToken = null;

    /**
     * @var anyURI $DefaultAbsolutePantTiltPositionSpace
     */
    protected $DefaultAbsolutePantTiltPositionSpace = null;

    /**
     * @var anyURI $DefaultAbsoluteZoomPositionSpace
     */
    protected $DefaultAbsoluteZoomPositionSpace = null;

    /**
     * @var anyURI $DefaultRelativePanTiltTranslationSpace
     */
    protected $DefaultRelativePanTiltTranslationSpace = null;

    /**
     * @var anyURI $DefaultRelativeZoomTranslationSpace
     */
    protected $DefaultRelativeZoomTranslationSpace = null;

    /**
     * @var anyURI $DefaultContinuousPanTiltVelocitySpace
     */
    protected $DefaultContinuousPanTiltVelocitySpace = null;

    /**
     * @var anyURI $DefaultContinuousZoomVelocitySpace
     */
    protected $DefaultContinuousZoomVelocitySpace = null;

    /**
     * @var PTZSpeed $DefaultPTZSpeed
     */
    protected $DefaultPTZSpeed = null;

    /**
     * @var duration $DefaultPTZTimeout
     */
    protected $DefaultPTZTimeout = null;

    /**
     * @var PanTiltLimits $PanTiltLimits
     */
    protected $PanTiltLimits = null;

    /**
     * @var ZoomLimits $ZoomLimits
     */
    protected $ZoomLimits = null;

    /**
     * @var PTZConfigurationExtension $Extension
     */
    protected $Extension = null;

    /**
     * @var int $MoveRamp
     */
    protected $MoveRamp = null;

    /**
     * @var int $PresetRamp
     */
    protected $PresetRamp = null;

    /**
     * @var int $PresetTourRamp
     */
    protected $PresetTourRamp = null;

    /**
     * @param Name $Name
     * @param int $UseCount
     * @param ReferenceToken $token
     * @param ReferenceToken $NodeToken
     * @param int $MoveRamp
     * @param int $PresetRamp
     * @param int $PresetTourRamp
     */
    public function __construct($Name, $UseCount, $token, $NodeToken, $MoveRamp, $PresetRamp, $PresetTourRamp)
    {
      parent::__construct($Name, $UseCount, $token);
      $this->NodeToken = $NodeToken;
      $this->MoveRamp = $MoveRamp;
      $this->PresetRamp = $PresetRamp;
      $this->PresetTourRamp = $PresetTourRamp;
    }

    /**
     * @return ReferenceToken
     */
    public function getNodeToken()
    {
      return $this->NodeToken;
    }

    /**
     * @param ReferenceToken $NodeToken
     * @return \app\modules\dvr\components\onvif\wsdl\PTZConfiguration
     */
    public function setNodeToken($NodeToken)
    {
      $this->NodeToken = $NodeToken;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getDefaultAbsolutePantTiltPositionSpace()
    {
      return $this->DefaultAbsolutePantTiltPositionSpace;
    }

    /**
     * @param anyURI $DefaultAbsolutePantTiltPositionSpace
     * @return \app\modules\dvr\components\onvif\wsdl\PTZConfiguration
     */
    public function setDefaultAbsolutePantTiltPositionSpace($DefaultAbsolutePantTiltPositionSpace)
    {
      $this->DefaultAbsolutePantTiltPositionSpace = $DefaultAbsolutePantTiltPositionSpace;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getDefaultAbsoluteZoomPositionSpace()
    {
      return $this->DefaultAbsoluteZoomPositionSpace;
    }

    /**
     * @param anyURI $DefaultAbsoluteZoomPositionSpace
     * @return \app\modules\dvr\components\onvif\wsdl\PTZConfiguration
     */
    public function setDefaultAbsoluteZoomPositionSpace($DefaultAbsoluteZoomPositionSpace)
    {
      $this->DefaultAbsoluteZoomPositionSpace = $DefaultAbsoluteZoomPositionSpace;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getDefaultRelativePanTiltTranslationSpace()
    {
      return $this->DefaultRelativePanTiltTranslationSpace;
    }

    /**
     * @param anyURI $DefaultRelativePanTiltTranslationSpace
     * @return \app\modules\dvr\components\onvif\wsdl\PTZConfiguration
     */
    public function setDefaultRelativePanTiltTranslationSpace($DefaultRelativePanTiltTranslationSpace)
    {
      $this->DefaultRelativePanTiltTranslationSpace = $DefaultRelativePanTiltTranslationSpace;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getDefaultRelativeZoomTranslationSpace()
    {
      return $this->DefaultRelativeZoomTranslationSpace;
    }

    /**
     * @param anyURI $DefaultRelativeZoomTranslationSpace
     * @return \app\modules\dvr\components\onvif\wsdl\PTZConfiguration
     */
    public function setDefaultRelativeZoomTranslationSpace($DefaultRelativeZoomTranslationSpace)
    {
      $this->DefaultRelativeZoomTranslationSpace = $DefaultRelativeZoomTranslationSpace;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getDefaultContinuousPanTiltVelocitySpace()
    {
      return $this->DefaultContinuousPanTiltVelocitySpace;
    }

    /**
     * @param anyURI $DefaultContinuousPanTiltVelocitySpace
     * @return \app\modules\dvr\components\onvif\wsdl\PTZConfiguration
     */
    public function setDefaultContinuousPanTiltVelocitySpace($DefaultContinuousPanTiltVelocitySpace)
    {
      $this->DefaultContinuousPanTiltVelocitySpace = $DefaultContinuousPanTiltVelocitySpace;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getDefaultContinuousZoomVelocitySpace()
    {
      return $this->DefaultContinuousZoomVelocitySpace;
    }

    /**
     * @param anyURI $DefaultContinuousZoomVelocitySpace
     * @return \app\modules\dvr\components\onvif\wsdl\PTZConfiguration
     */
    public function setDefaultContinuousZoomVelocitySpace($DefaultContinuousZoomVelocitySpace)
    {
      $this->DefaultContinuousZoomVelocitySpace = $DefaultContinuousZoomVelocitySpace;
      return $this;
    }

    /**
     * @return PTZSpeed
     */
    public function getDefaultPTZSpeed()
    {
      return $this->DefaultPTZSpeed;
    }

    /**
     * @param PTZSpeed $DefaultPTZSpeed
     * @return \app\modules\dvr\components\onvif\wsdl\PTZConfiguration
     */
    public function setDefaultPTZSpeed($DefaultPTZSpeed)
    {
      $this->DefaultPTZSpeed = $DefaultPTZSpeed;
      return $this;
    }

    /**
     * @return duration
     */
    public function getDefaultPTZTimeout()
    {
      return $this->DefaultPTZTimeout;
    }

    /**
     * @param duration $DefaultPTZTimeout
     * @return \app\modules\dvr\components\onvif\wsdl\PTZConfiguration
     */
    public function setDefaultPTZTimeout($DefaultPTZTimeout)
    {
      $this->DefaultPTZTimeout = $DefaultPTZTimeout;
      return $this;
    }

    /**
     * @return PanTiltLimits
     */
    public function getPanTiltLimits()
    {
      return $this->PanTiltLimits;
    }

    /**
     * @param PanTiltLimits $PanTiltLimits
     * @return \app\modules\dvr\components\onvif\wsdl\PTZConfiguration
     */
    public function setPanTiltLimits($PanTiltLimits)
    {
      $this->PanTiltLimits = $PanTiltLimits;
      return $this;
    }

    /**
     * @return ZoomLimits
     */
    public function getZoomLimits()
    {
      return $this->ZoomLimits;
    }

    /**
     * @param ZoomLimits $ZoomLimits
     * @return \app\modules\dvr\components\onvif\wsdl\PTZConfiguration
     */
    public function setZoomLimits($ZoomLimits)
    {
      $this->ZoomLimits = $ZoomLimits;
      return $this;
    }

    /**
     * @return PTZConfigurationExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param PTZConfigurationExtension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\PTZConfiguration
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

    /**
     * @return int
     */
    public function getMoveRamp()
    {
      return $this->MoveRamp;
    }

    /**
     * @param int $MoveRamp
     * @return \app\modules\dvr\components\onvif\wsdl\PTZConfiguration
     */
    public function setMoveRamp($MoveRamp)
    {
      $this->MoveRamp = $MoveRamp;
      return $this;
    }

    /**
     * @return int
     */
    public function getPresetRamp()
    {
      return $this->PresetRamp;
    }

    /**
     * @param int $PresetRamp
     * @return \app\modules\dvr\components\onvif\wsdl\PTZConfiguration
     */
    public function setPresetRamp($PresetRamp)
    {
      $this->PresetRamp = $PresetRamp;
      return $this;
    }

    /**
     * @return int
     */
    public function getPresetTourRamp()
    {
      return $this->PresetTourRamp;
    }

    /**
     * @param int $PresetTourRamp
     * @return \app\modules\dvr\components\onvif\wsdl\PTZConfiguration
     */
    public function setPresetTourRamp($PresetTourRamp)
    {
      $this->PresetTourRamp = $PresetTourRamp;
      return $this;
    }

}
