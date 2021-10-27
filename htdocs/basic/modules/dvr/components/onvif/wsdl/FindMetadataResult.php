<?php

namespace app\modules\dvr\components\onvif\wsdl;

class FindMetadataResult
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
     * @var string $any
     */
    protected $any = null;

    /**
     * @param RecordingReference $RecordingToken
     * @param TrackReference $TrackToken
     * @param \DateTime $Time
     * @param string $any
     */
    public function __construct($RecordingToken, $TrackToken, \DateTime $Time, $any)
    {
      $this->RecordingToken = $RecordingToken;
      $this->TrackToken = $TrackToken;
      $this->Time = $Time->format(\DateTime::ATOM);
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
     * @return \app\modules\dvr\components\onvif\wsdl\FindMetadataResult
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
     * @return \app\modules\dvr\components\onvif\wsdl\FindMetadataResult
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
     * @return \app\modules\dvr\components\onvif\wsdl\FindMetadataResult
     */
    public function setTime(\DateTime $Time)
    {
      $this->Time = $Time->format(\DateTime::ATOM);
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
     * @return \app\modules\dvr\components\onvif\wsdl\FindMetadataResult
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
