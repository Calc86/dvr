<?php

namespace app\modules\dvr\components\onvif\wsdl;

class RecordingInformation
{

    /**
     * @var RecordingReference $RecordingToken
     */
    protected $RecordingToken = null;

    /**
     * @var RecordingSourceInformation $Source
     */
    protected $Source = null;

    /**
     * @var \DateTime $EarliestRecording
     */
    protected $EarliestRecording = null;

    /**
     * @var \DateTime $LatestRecording
     */
    protected $LatestRecording = null;

    /**
     * @var Description $Content
     */
    protected $Content = null;

    /**
     * @var TrackInformation[] $Track
     */
    protected $Track = null;

    /**
     * @var RecordingStatus $RecordingStatus
     */
    protected $RecordingStatus = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param RecordingReference $RecordingToken
     * @param RecordingSourceInformation $Source
     * @param Description $Content
     * @param RecordingStatus $RecordingStatus
     * @param string $any
     */
    public function __construct($RecordingToken, $Source, $Content, $RecordingStatus, $any)
    {
      $this->RecordingToken = $RecordingToken;
      $this->Source = $Source;
      $this->Content = $Content;
      $this->RecordingStatus = $RecordingStatus;
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
     * @return \app\modules\dvr\components\onvif\wsdl\RecordingInformation
     */
    public function setRecordingToken($RecordingToken)
    {
      $this->RecordingToken = $RecordingToken;
      return $this;
    }

    /**
     * @return RecordingSourceInformation
     */
    public function getSource()
    {
      return $this->Source;
    }

    /**
     * @param RecordingSourceInformation $Source
     * @return \app\modules\dvr\components\onvif\wsdl\RecordingInformation
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEarliestRecording()
    {
      if ($this->EarliestRecording == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EarliestRecording);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EarliestRecording
     * @return \app\modules\dvr\components\onvif\wsdl\RecordingInformation
     */
    public function setEarliestRecording(\DateTime $EarliestRecording = null)
    {
      if ($EarliestRecording == null) {
       $this->EarliestRecording = null;
      } else {
        $this->EarliestRecording = $EarliestRecording->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLatestRecording()
    {
      if ($this->LatestRecording == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LatestRecording);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LatestRecording
     * @return \app\modules\dvr\components\onvif\wsdl\RecordingInformation
     */
    public function setLatestRecording(\DateTime $LatestRecording = null)
    {
      if ($LatestRecording == null) {
       $this->LatestRecording = null;
      } else {
        $this->LatestRecording = $LatestRecording->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return Description
     */
    public function getContent()
    {
      return $this->Content;
    }

    /**
     * @param Description $Content
     * @return \app\modules\dvr\components\onvif\wsdl\RecordingInformation
     */
    public function setContent($Content)
    {
      $this->Content = $Content;
      return $this;
    }

    /**
     * @return TrackInformation[]
     */
    public function getTrack()
    {
      return $this->Track;
    }

    /**
     * @param TrackInformation[] $Track
     * @return \app\modules\dvr\components\onvif\wsdl\RecordingInformation
     */
    public function setTrack(array $Track = null)
    {
      $this->Track = $Track;
      return $this;
    }

    /**
     * @return RecordingStatus
     */
    public function getRecordingStatus()
    {
      return $this->RecordingStatus;
    }

    /**
     * @param RecordingStatus $RecordingStatus
     * @return \app\modules\dvr\components\onvif\wsdl\RecordingInformation
     */
    public function setRecordingStatus($RecordingStatus)
    {
      $this->RecordingStatus = $RecordingStatus;
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
     * @return \app\modules\dvr\components\onvif\wsdl\RecordingInformation
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
