<?php

namespace app\modules\dvr\components\onvif\wsdl;

class Time
{

    /**
     * @var int $Hour
     */
    protected $Hour = null;

    /**
     * @var int $Minute
     */
    protected $Minute = null;

    /**
     * @var int $Second
     */
    protected $Second = null;

    /**
     * @param int $Hour
     * @param int $Minute
     * @param int $Second
     */
    public function __construct($Hour, $Minute, $Second)
    {
      $this->Hour = $Hour;
      $this->Minute = $Minute;
      $this->Second = $Second;
    }

    /**
     * @return int
     */
    public function getHour()
    {
      return $this->Hour;
    }

    /**
     * @param int $Hour
     * @return \app\modules\dvr\components\onvif\wsdl\Time
     */
    public function setHour($Hour)
    {
      $this->Hour = $Hour;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinute()
    {
      return $this->Minute;
    }

    /**
     * @param int $Minute
     * @return \app\modules\dvr\components\onvif\wsdl\Time
     */
    public function setMinute($Minute)
    {
      $this->Minute = $Minute;
      return $this;
    }

    /**
     * @return int
     */
    public function getSecond()
    {
      return $this->Second;
    }

    /**
     * @param int $Second
     * @return \app\modules\dvr\components\onvif\wsdl\Time
     */
    public function setSecond($Second)
    {
      $this->Second = $Second;
      return $this;
    }

}
