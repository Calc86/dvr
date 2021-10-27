<?php

namespace app\modules\dvr\components\onvif\wsdl;

class PTZPresetTourStatus
{

    /**
     * @var PTZPresetTourState $State
     */
    protected $State = null;

    /**
     * @var PTZPresetTourSpot $CurrentTourSpot
     */
    protected $CurrentTourSpot = null;

    /**
     * @var PTZPresetTourStatusExtension $Extension
     */
    protected $Extension = null;

    /**
     * @param PTZPresetTourState $State
     */
    public function __construct($State)
    {
      $this->State = $State;
    }

    /**
     * @return PTZPresetTourState
     */
    public function getState()
    {
      return $this->State;
    }

    /**
     * @param PTZPresetTourState $State
     * @return \app\modules\dvr\components\onvif\wsdl\PTZPresetTourStatus
     */
    public function setState($State)
    {
      $this->State = $State;
      return $this;
    }

    /**
     * @return PTZPresetTourSpot
     */
    public function getCurrentTourSpot()
    {
      return $this->CurrentTourSpot;
    }

    /**
     * @param PTZPresetTourSpot $CurrentTourSpot
     * @return \app\modules\dvr\components\onvif\wsdl\PTZPresetTourStatus
     */
    public function setCurrentTourSpot($CurrentTourSpot)
    {
      $this->CurrentTourSpot = $CurrentTourSpot;
      return $this;
    }

    /**
     * @return PTZPresetTourStatusExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param PTZPresetTourStatusExtension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\PTZPresetTourStatus
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
