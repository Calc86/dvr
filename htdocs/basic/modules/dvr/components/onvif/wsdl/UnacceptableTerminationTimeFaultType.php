<?php

namespace app\modules\dvr\components\onvif\wsdl;

class UnacceptableTerminationTimeFaultType extends BaseFaultType
{

    /**
     * @var \DateTime $MinimumTime
     */
    protected $MinimumTime = null;

    /**
     * @var \DateTime $MaximumTime
     */
    protected $MaximumTime = null;

    /**
     * @param string $any
     * @param \DateTime $Timestamp
     * @param \DateTime $MinimumTime
     */
    public function __construct($any, \DateTime $Timestamp, \DateTime $MinimumTime)
    {
      parent::__construct($any, $Timestamp);
      $this->MinimumTime = $MinimumTime->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getMinimumTime()
    {
      if ($this->MinimumTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->MinimumTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $MinimumTime
     * @return \app\modules\dvr\components\onvif\wsdl\UnacceptableTerminationTimeFaultType
     */
    public function setMinimumTime(\DateTime $MinimumTime)
    {
      $this->MinimumTime = $MinimumTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getMaximumTime()
    {
      if ($this->MaximumTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->MaximumTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $MaximumTime
     * @return \app\modules\dvr\components\onvif\wsdl\UnacceptableTerminationTimeFaultType
     */
    public function setMaximumTime(\DateTime $MaximumTime = null)
    {
      if ($MaximumTime == null) {
       $this->MaximumTime = null;
      } else {
        $this->MaximumTime = $MaximumTime->format(\DateTime::ATOM);
      }
      return $this;
    }

}
