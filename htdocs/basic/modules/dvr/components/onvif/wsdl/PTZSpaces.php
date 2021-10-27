<?php

namespace app\modules\dvr\components\onvif\wsdl;

class PTZSpaces
{

    /**
     * @var Space2DDescription[] $AbsolutePanTiltPositionSpace
     */
    protected $AbsolutePanTiltPositionSpace = null;

    /**
     * @var Space1DDescription[] $AbsoluteZoomPositionSpace
     */
    protected $AbsoluteZoomPositionSpace = null;

    /**
     * @var Space2DDescription[] $RelativePanTiltTranslationSpace
     */
    protected $RelativePanTiltTranslationSpace = null;

    /**
     * @var Space1DDescription[] $RelativeZoomTranslationSpace
     */
    protected $RelativeZoomTranslationSpace = null;

    /**
     * @var Space2DDescription[] $ContinuousPanTiltVelocitySpace
     */
    protected $ContinuousPanTiltVelocitySpace = null;

    /**
     * @var Space1DDescription[] $ContinuousZoomVelocitySpace
     */
    protected $ContinuousZoomVelocitySpace = null;

    /**
     * @var Space1DDescription[] $PanTiltSpeedSpace
     */
    protected $PanTiltSpeedSpace = null;

    /**
     * @var Space1DDescription[] $ZoomSpeedSpace
     */
    protected $ZoomSpeedSpace = null;

    /**
     * @var PTZSpacesExtension $Extension
     */
    protected $Extension = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Space2DDescription[]
     */
    public function getAbsolutePanTiltPositionSpace()
    {
      return $this->AbsolutePanTiltPositionSpace;
    }

    /**
     * @param Space2DDescription[] $AbsolutePanTiltPositionSpace
     * @return \app\modules\dvr\components\onvif\wsdl\PTZSpaces
     */
    public function setAbsolutePanTiltPositionSpace(array $AbsolutePanTiltPositionSpace = null)
    {
      $this->AbsolutePanTiltPositionSpace = $AbsolutePanTiltPositionSpace;
      return $this;
    }

    /**
     * @return Space1DDescription[]
     */
    public function getAbsoluteZoomPositionSpace()
    {
      return $this->AbsoluteZoomPositionSpace;
    }

    /**
     * @param Space1DDescription[] $AbsoluteZoomPositionSpace
     * @return \app\modules\dvr\components\onvif\wsdl\PTZSpaces
     */
    public function setAbsoluteZoomPositionSpace(array $AbsoluteZoomPositionSpace = null)
    {
      $this->AbsoluteZoomPositionSpace = $AbsoluteZoomPositionSpace;
      return $this;
    }

    /**
     * @return Space2DDescription[]
     */
    public function getRelativePanTiltTranslationSpace()
    {
      return $this->RelativePanTiltTranslationSpace;
    }

    /**
     * @param Space2DDescription[] $RelativePanTiltTranslationSpace
     * @return \app\modules\dvr\components\onvif\wsdl\PTZSpaces
     */
    public function setRelativePanTiltTranslationSpace(array $RelativePanTiltTranslationSpace = null)
    {
      $this->RelativePanTiltTranslationSpace = $RelativePanTiltTranslationSpace;
      return $this;
    }

    /**
     * @return Space1DDescription[]
     */
    public function getRelativeZoomTranslationSpace()
    {
      return $this->RelativeZoomTranslationSpace;
    }

    /**
     * @param Space1DDescription[] $RelativeZoomTranslationSpace
     * @return \app\modules\dvr\components\onvif\wsdl\PTZSpaces
     */
    public function setRelativeZoomTranslationSpace(array $RelativeZoomTranslationSpace = null)
    {
      $this->RelativeZoomTranslationSpace = $RelativeZoomTranslationSpace;
      return $this;
    }

    /**
     * @return Space2DDescription[]
     */
    public function getContinuousPanTiltVelocitySpace()
    {
      return $this->ContinuousPanTiltVelocitySpace;
    }

    /**
     * @param Space2DDescription[] $ContinuousPanTiltVelocitySpace
     * @return \app\modules\dvr\components\onvif\wsdl\PTZSpaces
     */
    public function setContinuousPanTiltVelocitySpace(array $ContinuousPanTiltVelocitySpace = null)
    {
      $this->ContinuousPanTiltVelocitySpace = $ContinuousPanTiltVelocitySpace;
      return $this;
    }

    /**
     * @return Space1DDescription[]
     */
    public function getContinuousZoomVelocitySpace()
    {
      return $this->ContinuousZoomVelocitySpace;
    }

    /**
     * @param Space1DDescription[] $ContinuousZoomVelocitySpace
     * @return \app\modules\dvr\components\onvif\wsdl\PTZSpaces
     */
    public function setContinuousZoomVelocitySpace(array $ContinuousZoomVelocitySpace = null)
    {
      $this->ContinuousZoomVelocitySpace = $ContinuousZoomVelocitySpace;
      return $this;
    }

    /**
     * @return Space1DDescription[]
     */
    public function getPanTiltSpeedSpace()
    {
      return $this->PanTiltSpeedSpace;
    }

    /**
     * @param Space1DDescription[] $PanTiltSpeedSpace
     * @return \app\modules\dvr\components\onvif\wsdl\PTZSpaces
     */
    public function setPanTiltSpeedSpace(array $PanTiltSpeedSpace = null)
    {
      $this->PanTiltSpeedSpace = $PanTiltSpeedSpace;
      return $this;
    }

    /**
     * @return Space1DDescription[]
     */
    public function getZoomSpeedSpace()
    {
      return $this->ZoomSpeedSpace;
    }

    /**
     * @param Space1DDescription[] $ZoomSpeedSpace
     * @return \app\modules\dvr\components\onvif\wsdl\PTZSpaces
     */
    public function setZoomSpeedSpace(array $ZoomSpeedSpace = null)
    {
      $this->ZoomSpeedSpace = $ZoomSpeedSpace;
      return $this;
    }

    /**
     * @return PTZSpacesExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param PTZSpacesExtension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\PTZSpaces
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
