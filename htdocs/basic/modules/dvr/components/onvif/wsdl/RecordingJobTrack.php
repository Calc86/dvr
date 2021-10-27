<?php

namespace app\modules\dvr\components\onvif\wsdl;

class RecordingJobTrack
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
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $SourceTag
     * @param TrackReference $Destination
     * @param string $any
     */
    public function __construct($SourceTag, $Destination, $any)
    {
      $this->SourceTag = $SourceTag;
      $this->Destination = $Destination;
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
     * @return \app\modules\dvr\components\onvif\wsdl\RecordingJobTrack
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
     * @return \app\modules\dvr\components\onvif\wsdl\RecordingJobTrack
     */
    public function setDestination($Destination)
    {
      $this->Destination = $Destination;
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
     * @return \app\modules\dvr\components\onvif\wsdl\RecordingJobTrack
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
