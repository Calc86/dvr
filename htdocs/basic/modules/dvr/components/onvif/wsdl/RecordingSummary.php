<?php

namespace app\modules\dvr\components\onvif\wsdl;

class RecordingSummary
{

    /**
     * @var \DateTime $DataFrom
     */
    protected $DataFrom = null;

    /**
     * @var \DateTime $DataUntil
     */
    protected $DataUntil = null;

    /**
     * @var int $NumberRecordings
     */
    protected $NumberRecordings = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param \DateTime $DataFrom
     * @param \DateTime $DataUntil
     * @param int $NumberRecordings
     * @param string $any
     */
    public function __construct(\DateTime $DataFrom, \DateTime $DataUntil, $NumberRecordings, $any)
    {
      $this->DataFrom = $DataFrom->format(\DateTime::ATOM);
      $this->DataUntil = $DataUntil->format(\DateTime::ATOM);
      $this->NumberRecordings = $NumberRecordings;
      $this->any = $any;
    }

    /**
     * @return \DateTime
     */
    public function getDataFrom()
    {
      if ($this->DataFrom == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DataFrom);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DataFrom
     * @return \app\modules\dvr\components\onvif\wsdl\RecordingSummary
     */
    public function setDataFrom(\DateTime $DataFrom)
    {
      $this->DataFrom = $DataFrom->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDataUntil()
    {
      if ($this->DataUntil == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DataUntil);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DataUntil
     * @return \app\modules\dvr\components\onvif\wsdl\RecordingSummary
     */
    public function setDataUntil(\DateTime $DataUntil)
    {
      $this->DataUntil = $DataUntil->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberRecordings()
    {
      return $this->NumberRecordings;
    }

    /**
     * @param int $NumberRecordings
     * @return \app\modules\dvr\components\onvif\wsdl\RecordingSummary
     */
    public function setNumberRecordings($NumberRecordings)
    {
      $this->NumberRecordings = $NumberRecordings;
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
     * @return \app\modules\dvr\components\onvif\wsdl\RecordingSummary
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
