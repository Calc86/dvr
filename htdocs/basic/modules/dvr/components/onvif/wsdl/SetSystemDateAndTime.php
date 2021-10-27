<?php

namespace app\modules\dvr\components\onvif\wsdl;

class SetSystemDateAndTime
{

    /**
     * @var SetDateTimeType $DateTimeType
     */
    protected $DateTimeType = null;

    /**
     * @var boolean $DaylightSavings
     */
    protected $DaylightSavings = null;

    /**
     * @var TimeZone $TimeZone
     */
    protected $TimeZone = null;

    /**
     * @var \DateTime $UTCDateTime
     */
    protected $UTCDateTime = null;

    /**
     * @param SetDateTimeType $DateTimeType
     * @param boolean $DaylightSavings
     * @param TimeZone $TimeZone
     * @param \DateTime $UTCDateTime
     */
    public function __construct($DateTimeType, $DaylightSavings, $TimeZone, \DateTime $UTCDateTime)
    {
      $this->DateTimeType = $DateTimeType;
      $this->DaylightSavings = $DaylightSavings;
      $this->TimeZone = $TimeZone;
      $this->UTCDateTime = $UTCDateTime->format(\DateTime::ATOM);
    }

    /**
     * @return SetDateTimeType
     */
    public function getDateTimeType()
    {
      return $this->DateTimeType;
    }

    /**
     * @param SetDateTimeType $DateTimeType
     * @return \app\modules\dvr\components\onvif\wsdl\SetSystemDateAndTime
     */
    public function setDateTimeType($DateTimeType)
    {
      $this->DateTimeType = $DateTimeType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDaylightSavings()
    {
      return $this->DaylightSavings;
    }

    /**
     * @param boolean $DaylightSavings
     * @return \app\modules\dvr\components\onvif\wsdl\SetSystemDateAndTime
     */
    public function setDaylightSavings($DaylightSavings)
    {
      $this->DaylightSavings = $DaylightSavings;
      return $this;
    }

    /**
     * @return TimeZone
     */
    public function getTimeZone()
    {
      return $this->TimeZone;
    }

    /**
     * @param TimeZone $TimeZone
     * @return \app\modules\dvr\components\onvif\wsdl\SetSystemDateAndTime
     */
    public function setTimeZone($TimeZone)
    {
      $this->TimeZone = $TimeZone;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUTCDateTime()
    {
      if ($this->UTCDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->UTCDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $UTCDateTime
     * @return \app\modules\dvr\components\onvif\wsdl\SetSystemDateAndTime
     */
    public function setUTCDateTime(\DateTime $UTCDateTime)
    {
      $this->UTCDateTime = $UTCDateTime->format(\DateTime::ATOM);
      return $this;
    }

}
