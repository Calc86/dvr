<?php

namespace app\modules\dvr\components\onvif\wsdl;

class ImagingStatus20
{

    /**
     * @var FocusStatus20 $FocusStatus20
     */
    protected $FocusStatus20 = null;

    /**
     * @var ImagingStatus20Extension $Extension
     */
    protected $Extension = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return FocusStatus20
     */
    public function getFocusStatus20()
    {
      return $this->FocusStatus20;
    }

    /**
     * @param FocusStatus20 $FocusStatus20
     * @return \app\modules\dvr\components\onvif\wsdl\ImagingStatus20
     */
    public function setFocusStatus20($FocusStatus20)
    {
      $this->FocusStatus20 = $FocusStatus20;
      return $this;
    }

    /**
     * @return ImagingStatus20Extension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param ImagingStatus20Extension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\ImagingStatus20
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
