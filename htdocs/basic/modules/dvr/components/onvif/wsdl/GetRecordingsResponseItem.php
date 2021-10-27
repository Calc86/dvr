<?php

namespace app\modules\dvr\components\onvif\wsdl;

class GetRecordingsResponseItem
{

    /**
     * @var RecordingReference $RecordingToken
     */
    protected $RecordingToken = null;

    /**
     * @var RecordingConfiguration $Configuration
     */
    protected $Configuration = null;

    /**
     * @var GetTracksResponseList $Tracks
     */
    protected $Tracks = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param RecordingReference $RecordingToken
     * @param RecordingConfiguration $Configuration
     * @param GetTracksResponseList $Tracks
     * @param string $any
     */
    public function __construct($RecordingToken, $Configuration, $Tracks, $any)
    {
      $this->RecordingToken = $RecordingToken;
      $this->Configuration = $Configuration;
      $this->Tracks = $Tracks;
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
     * @return \app\modules\dvr\components\onvif\wsdl\GetRecordingsResponseItem
     */
    public function setRecordingToken($RecordingToken)
    {
      $this->RecordingToken = $RecordingToken;
      return $this;
    }

    /**
     * @return RecordingConfiguration
     */
    public function getConfiguration()
    {
      return $this->Configuration;
    }

    /**
     * @param RecordingConfiguration $Configuration
     * @return \app\modules\dvr\components\onvif\wsdl\GetRecordingsResponseItem
     */
    public function setConfiguration($Configuration)
    {
      $this->Configuration = $Configuration;
      return $this;
    }

    /**
     * @return GetTracksResponseList
     */
    public function getTracks()
    {
      return $this->Tracks;
    }

    /**
     * @param GetTracksResponseList $Tracks
     * @return \app\modules\dvr\components\onvif\wsdl\GetRecordingsResponseItem
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
     * @return \app\modules\dvr\components\onvif\wsdl\GetRecordingsResponseItem
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
