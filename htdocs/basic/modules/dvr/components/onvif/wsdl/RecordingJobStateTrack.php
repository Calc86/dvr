<?php

namespace app\modules\dvr\components\onvif\wsdl;

class RecordingJobStateTrack
{

    /**
     * @var string $SourceTag
     */
    protected $SourceTag = null;

    /**
     * @var TrackReference $Destination
     */
    protected $Destination = null;

    /**
     * @var string $Error
     */
    protected $Error = null;

    /**
     * @var RecordingJobState $State
     */
    protected $State = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $SourceTag
     * @param TrackReference $Destination
     * @param RecordingJobState $State
     * @param string $any
     */
    public function __construct($SourceTag, $Destination, $State, $any)
    {
      $this->SourceTag = $SourceTag;
      $this->Destination = $Destination;
      $this->State = $State;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getSourceTag()
    {
      return $this->SourceTag;
    }

    /**
     * @param string $SourceTag
     * @return \app\modules\dvr\components\onvif\wsdl\RecordingJobStateTrack
     */
    public function setSourceTag($SourceTag)
    {
      $this->SourceTag = $SourceTag;
      return $this;
    }

    /**
     * @return TrackReference
     */
    public function getDestination()
    {
      return $this->Destination;
    }

    /**
     * @param TrackReference $Destination
     * @return \app\modules\dvr\components\onvif\wsdl\RecordingJobStateTrack
     */
    public function setDestination($Destination)
    {
      $this->Destination = $Destination;
      return $this;
    }

    /**
     * @return string
     */
    public function getError()
    {
      return $this->Error;
    }

    /**
     * @param string $Error
     * @return \app\modules\dvr\components\onvif\wsdl\RecordingJobStateTrack
     */
    public function setError($Error)
    {
      $this->Error = $Error;
      return $this;
    }

    /**
     * @return RecordingJobState
     */
    public function getState()
    {
      return $this->State;
    }

    /**
     * @param RecordingJobState $State
     * @return \app\modules\dvr\components\onvif\wsdl\RecordingJobStateTrack
     */
    public function setState($State)
    {
      $this->State = $State;
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
     * @return \app\modules\dvr\components\onvif\wsdl\RecordingJobStateTrack
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
