<?php

namespace app\modules\dvr\components\onvif\wsdl;

class PTZPresetTourPresetDetailOptions
{

    /**
     * @var ReferenceToken[] $PresetToken
     */
    protected $PresetToken = null;

    /**
     * @var boolean $Home
     */
    protected $Home = null;

    /**
     * @var Space2DDescription $PanTiltPositionSpace
     */
    protected $PanTiltPositionSpace = null;

    /**
     * @var Space1DDescription $ZoomPositionSpace
     */
    protected $ZoomPositionSpace = null;

    /**
     * @var PTZPresetTourPresetDetailOptionsExtension $Extension
     */
    protected $Extension = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ReferenceToken[]
     */
    public function getPresetToken()
    {
      return $this->PresetToken;
    }

    /**
     * @param ReferenceToken[] $PresetToken
     * @return \app\modules\dvr\components\onvif\wsdl\PTZPresetTourPresetDetailOptions
     */
    public function setPresetToken(array $PresetToken = null)
    {
      $this->PresetToken = $PresetToken;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHome()
    {
      return $this->Home;
    }

    /**
     * @param boolean $Home
     * @return \app\modules\dvr\components\onvif\wsdl\PTZPresetTourPresetDetailOptions
     */
    public function setHome($Home)
    {
      $this->Home = $Home;
      return $this;
    }

    /**
     * @return Space2DDescription
     */
    public function getPanTiltPositionSpace()
    {
      return $this->PanTiltPositionSpace;
    }

    /**
     * @param Space2DDescription $PanTiltPositionSpace
     * @return \app\modules\dvr\components\onvif\wsdl\PTZPresetTourPresetDetailOptions
     */
    public function setPanTiltPositionSpace($PanTiltPositionSpace)
    {
      $this->PanTiltPositionSpace = $PanTiltPositionSpace;
      return $this;
    }

    /**
     * @return Space1DDescription
     */
    public function getZoomPositionSpace()
    {
      return $this->ZoomPositionSpace;
    }

    /**
     * @param Space1DDescription $ZoomPositionSpace
     * @return \app\modules\dvr\components\onvif\wsdl\PTZPresetTourPresetDetailOptions
     */
    public function setZoomPositionSpace($ZoomPositionSpace)
    {
      $this->ZoomPositionSpace = $ZoomPositionSpace;
      return $this;
    }

    /**
     * @return PTZPresetTourPresetDetailOptionsExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param PTZPresetTourPresetDetailOptionsExtension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\PTZPresetTourPresetDetailOptions
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
