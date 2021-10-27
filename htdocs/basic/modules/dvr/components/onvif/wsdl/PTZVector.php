<?php

namespace app\modules\dvr\components\onvif\wsdl;

class PTZVector
{

    /**
     * @var Vector2D $PanTilt
     */
    protected $PanTilt = null;

    /**
     * @var Vector1D $Zoom
     */
    protected $Zoom = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Vector2D
     */
    public function getPanTilt()
    {
      return $this->PanTilt;
    }

    /**
     * @param Vector2D $PanTilt
     * @return \app\modules\dvr\components\onvif\wsdl\PTZVector
     */
    public function setPanTilt($PanTilt)
    {
      $this->PanTilt = $PanTilt;
      return $this;
    }

    /**
     * @return Vector1D
     */
    public function getZoom()
    {
      return $this->Zoom;
    }

    /**
     * @param Vector1D $Zoom
     * @return \app\modules\dvr\components\onvif\wsdl\PTZVector
     */
    public function setZoom($Zoom)
    {
      $this->Zoom = $Zoom;
      return $this;
    }

}
