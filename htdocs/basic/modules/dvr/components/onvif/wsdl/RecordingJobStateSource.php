<?php

namespace app\modules\dvr\components\onvif\wsdl;

class RecordingJobStateSource
{

    /**
     * @var SourceReference $SourceToken
     */
    protected $SourceToken = null;

    /**
     * @var RecordingJobState $State
     */
    protected $State = null;

    /**
     * @var RecordingJobStateTracks $Tracks
     */
    protected $Tracks = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param SourceReference $SourceToken
     * @param RecordingJobState $State
     * @param RecordingJobStateTracks $Tracks
     * @param string $any
     */
    public function __construct($SourceToken, $State, $Tracks, $any)
    {
      $this->SourceToken = $SourceToken;
      $this->State = $State;
      $this->Tracks = $Tracks;
      $this->any = $any;
    }

    /**
     * @return SourceReference
     */
    public function getSourceToken()
    {
      return $this->SourceToken;
    }

    /**
     * @param SourceReference $SourceToken
     * @return \app\modules\dvr\components\onvif\wsdl\RecordingJobStateSource
     */
    public function setSourceToken($SourceToken)
    {
      $this->SourceToken = $SourceToken;
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
     * @return \app\modules\dvr\components\onvif\wsdl\RecordingJobStateSource
     */
    public function setState($State)
    {
      $this->State = $State;
      return $this;
    }

    /**
     * @return RecordingJobStateTracks
     */
    public function getTracks()
    {
      return $this->Tracks;
    }

    /**
     * @param RecordingJobStateTracks $Tracks
     * @return \app\modules\dvr\components\onvif\wsdl\RecordingJobStateSource
     */
    public function setTracks($Tracks)
    {
      $this->Tracks = $Tracks;
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
     * @return \app\modules\dvr\components\onvif\wsdl\RecordingJobStateSource
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
