<?php

namespace app\modules\dvr\components\onvif\wsdl;

class PTZPresetTourStartingCondition
{

    /**
     * @var int $RecurringTime
     */
    protected $RecurringTime = null;

    /**
     * @var duration $RecurringDuration
     */
    protected $RecurringDuration = null;

    /**
     * @var PTZPresetTourDirection $Direction
     */
    protected $Direction = null;

    /**
     * @var PTZPresetTourStartingConditionExtension $Extension
     */
    protected $Extension = null;

    /**
     * @var boolean $RandomPresetOrder
     */
    protected $RandomPresetOrder = null;

    /**
     * @param boolean $RandomPresetOrder
     */
    public function __construct($RandomPresetOrder)
    {
      $this->RandomPresetOrder = $RandomPresetOrder;
    }

    /**
     * @return int
     */
    public function getRecurringTime()
    {
      return $this->RecurringTime;
    }

    /**
     * @param int $RecurringTime
     * @return \app\modules\dvr\components\onvif\wsdl\PTZPresetTourStartingCondition
     */
    public function setRecurringTime($RecurringTime)
    {
      $this->RecurringTime = $RecurringTime;
      return $this;
    }

    /**
     * @return duration
     */
    public function getRecurringDuration()
    {
      return $this->RecurringDuration;
    }

    /**
     * @param duration $RecurringDuration
     * @return \app\modules\dvr\components\onvif\wsdl\PTZPresetTourStartingCondition
     */
    public function setRecurringDuration($RecurringDuration)
    {
      $this->RecurringDuration = $RecurringDuration;
      return $this;
    }

    /**
     * @return PTZPresetTourDirection
     */
    public function getDirection()
    {
      return $this->Direction;
    }

    /**
     * @param PTZPresetTourDirection $Direction
     * @return \app\modules\dvr\components\onvif\wsdl\PTZPresetTourStartingCondition
     */
    public function setDirection($Direction)
    {
      $this->Direction = $Direction;
      return $this;
    }

    /**
     * @return PTZPresetTourStartingConditionExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param PTZPresetTourStartingConditionExtension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\PTZPresetTourStartingCondition
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRandomPresetOrder()
    {
      return $this->RandomPresetOrder;
    }

    /**
     * @param boolean $RandomPresetOrder
     * @return \app\modules\dvr\components\onvif\wsdl\PTZPresetTourStartingCondition
     */
    public function setRandomPresetOrder($RandomPresetOrder)
    {
      $this->RandomPresetOrder = $RandomPresetOrder;
      return $this;
    }

}
