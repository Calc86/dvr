<?php

namespace app\modules\dvr\components\onvif\wsdl;

class DateTimeRange
{

    /**
     * @var \DateTime $From
     */
    protected $From = null;

    /**
     * @var \DateTime $Until
     */
    protected $Until = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param \DateTime $From
     * @param \DateTime $Until
     * @param string $any
     */
    public function __construct(\DateTime $From, \DateTime $Until, $any)
    {
      $this->From = $From->format(\DateTime::ATOM);
      $this->Until = $Until->format(\DateTime::ATOM);
      $this->any = $any;
    }

    /**
     * @return \DateTime
     */
    public function getFrom()
    {
      if ($this->From == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->From);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $From
     * @return \app\modules\dvr\components\onvif\wsdl\DateTimeRange
     */
    public function setFrom(\DateTime $From)
    {
      $this->From = $From->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUntil()
    {
      if ($this->Until == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Until);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Until
     * @return \app\modules\dvr\components\onvif\wsdl\DateTimeRange
     */
    public function setUntil(\DateTime $Until)
    {
      $this->Until = $Until->format(\DateTime::ATOM);
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
     * @return \app\modules\dvr\components\onvif\wsdl\DateTimeRange
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
