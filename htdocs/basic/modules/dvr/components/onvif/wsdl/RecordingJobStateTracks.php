<?php

namespace app\modules\dvr\components\onvif\wsdl;

class RecordingJobStateTracks
{

    /**
     * @var RecordingJobStateTrack[] $Track
     */
    protected $Track = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RecordingJobStateTrack[]
     */
    public function getTrack()
    {
      return $this->Track;
    }

    /**
     * @param RecordingJobStateTrack[] $Track
     * @return \app\modules\dvr\components\onvif\wsdl\RecordingJobStateTracks
     */
    public function setTrack(array $Track = null)
    {
      $this->Track = $Track;
      return $this;
    }

}
