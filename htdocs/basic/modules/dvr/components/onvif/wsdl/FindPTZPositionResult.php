<?php

namespace app\modules\dvr\components\onvif\wsdl;

class FindPTZPositionResult
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
     * @var PTZVector $Position
     */
    protected $Position = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param RecordingReference $RecordingToken
     * @param TrackReference $TrackToken
     * @param \DateTime $Time
     * @param PTZVector $Position
     * @param string $any
     */
    public function __construct($RecordingToken, $TrackToken, \DateTime $Time, $Position, $any)
    {
      $this->RecordingToken = $RecordingToken;
      $this->TrackToken = $TrackToken;
      $this->Time = $Time->format(\DateTime::ATOM);
      $this->Position = $Position;
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
     * @return \app\modules\dvr\components\onvif\wsdl\FindPTZPositionResult
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
     * @return \app\modules\dvr\components\onvif\wsdl\FindPTZPositionResult
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
     * @return \app\modules\dvr\components\onvif\wsdl\FindPTZPositionResult
     */
    public function setTime(\DateTime $Time)
    {
      $this->Time = $Time->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return PTZVector
     */
    public function getPosition()
    {
      return $this->Position;
    }

    /**
     * @param PTZVector $Position
     * @return \app\modules\dvr\components\onvif\wsdl\FindPTZPositionResult
     */
    public function setPosition($Position)
    {
      $this->Position = $Position;
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
     * @return \app\modules\dvr\components\onvif\wsdl\FindPTZPositionResult
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
