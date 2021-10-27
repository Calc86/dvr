<?php

namespace app\modules\dvr\components\onvif\wsdl;

class MediaAttributes
{

    /**
     * @var RecordingReference $RecordingToken
     */
    protected $RecordingToken = null;

    /**
     * @var TrackAttributes[] $TrackAttributes
     */
    protected $TrackAttributes = null;

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
     * @param RecordingReference $RecordingToken
     * @param \DateTime $From
     * @param \DateTime $Until
     * @param string $any
     */
    public function __construct($RecordingToken, \DateTime $From, \DateTime $Until, $any)
    {
      $this->RecordingToken = $RecordingToken;
      $this->From = $From->format(\DateTime::ATOM);
      $this->Until = $Until->format(\DateTime::ATOM);
      $this->any = $any;
    }

    /**
     * @return RecordingReference
     */
    public function getRecordingToken()
    {
      return $this->RecordingToken;
    }

    /**
     * @param RecordingReference $RecordingToken
     * @return \app\modules\dvr\components\onvif\wsdl\MediaAttributes
     */
    public function setRecordingToken($RecordingToken)
    {
      $this->RecordingToken = $RecordingToken;
      return $this;
    }

    /**
     * @return TrackAttributes[]
     */
    public function getTrackAttributes()
    {
      return $this->TrackAttributes;
    }

    /**
     * @param TrackAttributes[] $TrackAttributes
     * @return \app\modules\dvr\components\onvif\wsdl\MediaAttributes
     */
    public function setTrackAttributes(array $TrackAttributes = null)
    {
      $this->TrackAttributes = $TrackAttributes;
      return $this;
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
     * @return \app\modules\dvr\components\onvif\wsdl\MediaAttributes
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
     * @return \app\modules\dvr\components\onvif\wsdl\MediaAttributes
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
     * @return \app\modules\dvr\components\onvif\wsdl\MediaAttributes
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
