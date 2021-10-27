<?php

namespace app\modules\dvr\components\onvif\wsdl;

class PTZStatusFilterOptions
{

    /**
     * @var boolean $PanTiltStatusSupported
     */
    protected $PanTiltStatusSupported = null;

    /**
     * @var boolean $ZoomStatusSupported
     */
    protected $ZoomStatusSupported = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var boolean $PanTiltPositionSupported
     */
    protected $PanTiltPositionSupported = null;

    /**
     * @var boolean $ZoomPositionSupported
     */
    protected $ZoomPositionSupported = null;

    /**
     * @var PTZStatusFilterOptionsExtension $Extension
     */
    protected $Extension = null;

    /**
     * @param boolean $PanTiltStatusSupported
     * @param boolean $ZoomStatusSupported
     * @param string $any
     */
    public function __construct($PanTiltStatusSupported, $ZoomStatusSupported, $any)
    {
      $this->PanTiltStatusSupported = $PanTiltStatusSupported;
      $this->ZoomStatusSupported = $ZoomStatusSupported;
      $this->any = $any;
    }

    /**
     * @return boolean
     */
    public function getPanTiltStatusSupported()
    {
      return $this->PanTiltStatusSupported;
    }

    /**
     * @param boolean $PanTiltStatusSupported
     * @return \app\modules\dvr\components\onvif\wsdl\PTZStatusFilterOptions
     */
    public function setPanTiltStatusSupported($PanTiltStatusSupported)
    {
      $this->PanTiltStatusSupported = $PanTiltStatusSupported;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getZoomStatusSupported()
    {
      return $this->ZoomStatusSupported;
    }

    /**
     * @param boolean $ZoomStatusSupported
     * @return \app\modules\dvr\components\onvif\wsdl\PTZStatusFilterOptions
     */
    public function setZoomStatusSupported($ZoomStatusSupported)
    {
      $this->ZoomStatusSupported = $ZoomStatusSupported;
      return $this;
    }

    /**
     * @return string
     */
    public function getAny()
    {
      return $this->any;
    }

    /**
     * @param string $any
     * @return \app\modules\dvr\components\onvif\wsdl\PTZStatusFilterOptions
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPanTiltPositionSupported()
    {
      return $this->PanTiltPositionSupported;
    }

    /**
     * @param boolean $PanTiltPositionSupported
     * @return \app\modules\dvr\components\onvif\wsdl\PTZStatusFilterOptions
     */
    public function setPanTiltPositionSupported($PanTiltPositionSupported)
    {
      $this->PanTiltPositionSupported = $PanTiltPositionSupported;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getZoomPositionSupported()
    {
      return $this->ZoomPositionSupported;
    }

    /**
     * @param boolean $ZoomPositionSupported
     * @return \app\modules\dvr\components\onvif\wsdl\PTZStatusFilterOptions
     */
    public function setZoomPositionSupported($ZoomPositionSupported)
    {
      $this->ZoomPositionSupported = $ZoomPositionSupported;
      return $this;
    }

    /**
     * @return PTZStatusFilterOptionsExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param PTZStatusFilterOptionsExtension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\PTZStatusFilterOptions
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
