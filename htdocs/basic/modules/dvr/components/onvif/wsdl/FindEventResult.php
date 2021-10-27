<?php

namespace app\modules\dvr\components\onvif\wsdl;

class FindEventResult
{

    /**
     * @var RecordingReference $RecordingToken
     */
    protected $RecordingToken = null;

    /**
     * @var TrackReference $TrackToken
     */
    protected $TrackToken = null;

    /**
     * @var \DateTime $Time
     */
    protected $Time = null;

    /**
     * @var NotificationMessageHolderType $Event
     */
    protected $Event = null;

    /**
     * @var boolean $StartStateEvent
     */
    protected $StartStateEvent = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param RecordingReference $RecordingToken
     * @param TrackReference $TrackToken
     * @param \DateTime $Time
     * @param NotificationMessageHolderType $Event
     * @param boolean $StartStateEvent
     * @param string $any
     */
    public function __construct($RecordingToken, $TrackToken, \DateTime $Time, $Event, $StartStateEvent, $any)
    {
      $this->RecordingToken = $RecordingToken;
      $this->TrackToken = $TrackToken;
      $this->Time = $Time->format(\DateTime::ATOM);
      $this->Event = $Event;
      $this->StartStateEvent = $StartStateEvent;
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
     * @return \app\modules\dvr\components\onvif\wsdl\FindEventResult
     */
    public function setRecordingToken($RecordingToken)
    {
      $this->RecordingToken = $RecordingToken;
      return $this;
    }

    /**
     * @return TrackReference
     */
    public function getTrackToken()
    {
      return $this->TrackToken;
    }

    /**
     * @param TrackReference $TrackToken
     * @return \app\modules\dvr\components\onvif\wsdl\FindEventResult
     */
    public function setTrackToken($TrackToken)
    {
      $this->TrackToken = $TrackToken;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTime()
    {
      if ($this->Time == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Time);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Time
     * @return \app\modules\dvr\components\onvif\wsdl\FindEventResult
     */
    public function setTime(\DateTime $Time)
    {
      $this->Time = $Time->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return NotificationMessageHolderType
     */
    public function getEvent()
    {
      return $this->Event;
    }

    /**
     * @param NotificationMessageHolderType $Event
     * @return \app\modules\dvr\components\onvif\wsdl\FindEventResult
     */
    public function setEvent($Event)
    {
      $this->Event = $Event;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getStartStateEvent()
    {
      return $this->StartStateEvent;
    }

    /**
     * @param boolean $StartStateEvent
     * @return \app\modules\dvr\components\onvif\wsdl\FindEventResult
     */
    public function setStartStateEvent($StartStateEvent)
    {
      $this->StartStateEvent = $StartStateEvent;
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
     * @return \app\modules\dvr\components\onvif\wsdl\FindEventResult
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
