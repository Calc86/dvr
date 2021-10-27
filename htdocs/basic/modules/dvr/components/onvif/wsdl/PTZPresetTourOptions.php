<?php

namespace app\modules\dvr\components\onvif\wsdl;

class PTZPresetTourOptions
{

    /**
     * @var boolean $AutoStart
     */
    protected $AutoStart = null;

    /**
     * @var PTZPresetTourStartingConditionOptions $StartingCondition
     */
    protected $StartingCondition = null;

    /**
     * @var PTZPresetTourSpotOptions $TourSpot
     */
    protected $TourSpot = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param boolean $AutoStart
     * @param PTZPresetTourStartingConditionOptions $StartingCondition
     * @param PTZPresetTourSpotOptions $TourSpot
     * @param string $any
     */
    public function __construct($AutoStart, $StartingCondition, $TourSpot, $any)
    {
      $this->AutoStart = $AutoStart;
      $this->StartingCondition = $StartingCondition;
      $this->TourSpot = $TourSpot;
      $this->any = $any;
    }

    /**
     * @return boolean
     */
    public function getAutoStart()
    {
      return $this->AutoStart;
    }

    /**
     * @param boolean $AutoStart
     * @return \app\modules\dvr\components\onvif\wsdl\PTZPresetTourOptions
     */
    public function setAutoStart($AutoStart)
    {
      $this->AutoStart = $AutoStart;
      return $this;
    }

    /**
     * @return PTZPresetTourStartingConditionOptions
     */
    public function getStartingCondition()
    {
      return $this->StartingCondition;
    }

    /**
     * @param PTZPresetTourStartingConditionOptions $StartingCondition
     * @return \app\modules\dvr\components\onvif\wsdl\PTZPresetTourOptions
     */
    public function setStartingCondition($StartingCondition)
    {
      $this->StartingCondition = $StartingCondition;
      return $this;
    }

    /**
     * @return PTZPresetTourSpotOptions
     */
    public function getTourSpot()
    {
      return $this->TourSpot;
    }

    /**
     * @param PTZPresetTourSpotOptions $TourSpot
     * @return \app\modules\dvr\components\onvif\wsdl\PTZPresetTourOptions
     */
    public function setTourSpot($TourSpot)
    {
      $this->TourSpot = $TourSpot;
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
     * @return \app\modules\dvr\components\onvif\wsdl\PTZPresetTourOptions
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
