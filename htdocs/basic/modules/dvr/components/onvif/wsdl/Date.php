<?php

namespace app\modules\dvr\components\onvif\wsdl;

class Date
{

    /**
     * @var int $Year
     */
    protected $Year = null;

    /**
     * @var int $Month
     */
    protected $Month = null;

    /**
     * @var int $Day
     */
    protected $Day = null;

    /**
     * @param int $Year
     * @param int $Month
     * @param int $Day
     */
    public function __construct($Year, $Month, $Day)
    {
      $this->Year = $Year;
      $this->Month = $Month;
      $this->Day = $Day;
    }

    /**
     * @return int
     */
    public function getYear()
    {
      return $this->Year;
    }

    /**
     * @param int $Year
     * @return \app\modules\dvr\components\onvif\wsdl\Date
     */
    public function setYear($Year)
    {
      $this->Year = $Year;
      return $this;
    }

    /**
     * @return int
     */
    public function getMonth()
    {
      return $this->Month;
    }

    /**
     * @param int $Month
     * @return \app\modules\dvr\components\onvif\wsdl\Date
     */
    public function setMonth($Month)
    {
      $this->Month = $Month;
      return $this;
    }

    /**
     * @return int
     */
    public function getDay()
    {
      return $this->Day;
    }

    /**
     * @param int $Day
     * @return \app\modules\dvr\components\onvif\wsdl\Date
     */
    public function setDay($Day)
    {
      $this->Day = $Day;
      return $this;
    }

}
