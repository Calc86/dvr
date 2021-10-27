<?php

namespace app\modules\dvr\components\onvif\wsdl;

class SystemDateTime
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
     * @var \DateTime $LocalDateTime
     */
    protected $LocalDateTime = null;

    /**
     * @var SystemDateTimeExtension $Extension
     */
    protected $Extension = null;

    /**
     * @param SetDateTimeType $DateTimeType
     * @param boolean $DaylightSavings
     */
    public function __construct($DateTimeType, $DaylightSavings)
    {
      $this->DateTimeType = $DateTimeType;
      $this->DaylightSavings = $DaylightSavings;
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
     * @return \app\modules\dvr\components\onvif\wsdl\SystemDateTime
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
     * @return \app\modules\dvr\components\onvif\wsdl\SystemDateTime
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
     * @return \app\modules\dvr\components\onvif\wsdl\SystemDateTime
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
     * @return \app\modules\dvr\components\onvif\wsdl\SystemDateTime
     */
    public function setUTCDateTime(\DateTime $UTCDateTime = null)
    {
      if ($UTCDateTime == null) {
       $this->UTCDateTime = null;
      } else {
        $this->UTCDateTime = $UTCDateTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLocalDateTime()
    {
      if ($this->LocalDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LocalDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LocalDateTime
     * @return \app\modules\dvr\components\onvif\wsdl\SystemDateTime
     */
    public function setLocalDateTime(\DateTime $LocalDateTime = null)
    {
      if ($LocalDateTime == null) {
       $this->LocalDateTime = null;
      } else {
        $this->LocalDateTime = $LocalDateTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return SystemDateTimeExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param SystemDateTimeExtension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\SystemDateTime
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
