<?php

namespace app\modules\dvr\components\onvif\wsdl;

class PTZNodeExtension
{

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var PTZPresetTourSupported $SupportedPresetTour
     */
    protected $SupportedPresetTour = null;

    /**
     * @var PTZNodeExtension2 $Extension
     */
    protected $Extension = null;

    /**
     * @param string $any
     */
    public function __construct($any)
    {
      $this->any = $any;
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
     * @return \app\modules\dvr\components\onvif\wsdl\PTZNodeExtension
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return PTZPresetTourSupported
     */
    public function getSupportedPresetTour()
    {
      return $this->SupportedPresetTour;
    }

    /**
     * @param PTZPresetTourSupported $SupportedPresetTour
     * @return \app\modules\dvr\components\onvif\wsdl\PTZNodeExtension
     */
    public function setSupportedPresetTour($SupportedPresetTour)
    {
      $this->SupportedPresetTour = $SupportedPresetTour;
      return $this;
    }

    /**
     * @return PTZNodeExtension2
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param PTZNodeExtension2 $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\PTZNodeExtension
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
