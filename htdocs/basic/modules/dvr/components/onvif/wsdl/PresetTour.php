<?php

namespace app\modules\dvr\components\onvif\wsdl;

class PresetTour
{

    /**
     * @var Name $Name
     */
    protected $Name = null;

    /**
     * @var PTZPresetTourStatus $Status
     */
    protected $Status = null;

    /**
     * @var boolean $AutoStart
     */
    protected $AutoStart = null;

    /**
     * @var PTZPresetTourStartingCondition $StartingCondition
     */
    protected $StartingCondition = null;

    /**
     * @var PTZPresetTourSpot[] $TourSpot
     */
    protected $TourSpot = null;

    /**
     * @var PTZPresetTourExtension $Extension
     */
    protected $Extension = null;

    /**
     * @var ReferenceToken $token
     */
    protected $token = null;

    /**
     * @param PTZPresetTourStatus $Status
     * @param boolean $AutoStart
     * @param PTZPresetTourStartingCondition $StartingCondition
     * @param ReferenceToken $token
     */
    public function __construct($Status, $AutoStart, $StartingCondition, $token)
    {
      $this->Status = $Status;
      $this->AutoStart = $AutoStart;
      $this->StartingCondition = $StartingCondition;
      $this->token = $token;
    }

    /**
     * @return Name
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param Name $Name
     * @return \app\modules\dvr\components\onvif\wsdl\PresetTour
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return PTZPresetTourStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param PTZPresetTourStatus $Status
     * @return \app\modules\dvr\components\onvif\wsdl\PresetTour
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
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
     * @return \app\modules\dvr\components\onvif\wsdl\PresetTour
     */
    public function setAutoStart($AutoStart)
    {
      $this->AutoStart = $AutoStart;
      return $this;
    }

    /**
     * @return PTZPresetTourStartingCondition
     */
    public function getStartingCondition()
    {
      return $this->StartingCondition;
    }

    /**
     * @param PTZPresetTourStartingCondition $StartingCondition
     * @return \app\modules\dvr\components\onvif\wsdl\PresetTour
     */
    public function setStartingCondition($StartingCondition)
    {
      $this->StartingCondition = $StartingCondition;
      return $this;
    }

    /**
     * @return PTZPresetTourSpot[]
     */
    public function getTourSpot()
    {
      return $this->TourSpot;
    }

    /**
     * @param PTZPresetTourSpot[] $TourSpot
     * @return \app\modules\dvr\components\onvif\wsdl\PresetTour
     */
    public function setTourSpot(array $TourSpot = null)
    {
      $this->TourSpot = $TourSpot;
      return $this;
    }

    /**
     * @return PTZPresetTourExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param PTZPresetTourExtension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\PresetTour
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

    /**
     * @return ReferenceToken
     */
    public function getToken()
    {
      return $this->token;
    }

    /**
     * @param ReferenceToken $token
     * @return \app\modules\dvr\components\onvif\wsdl\PresetTour
     */
    public function setToken($token)
    {
      $this->token = $token;
      return $this;
    }

}
