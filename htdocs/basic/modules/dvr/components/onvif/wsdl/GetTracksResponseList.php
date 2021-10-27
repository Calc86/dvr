<?php

namespace app\modules\dvr\components\onvif\wsdl;

class GetTracksResponseList
{

    /**
     * @var GetTracksResponseItem[] $Track
     */
    protected $Track = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetTracksResponseItem[]
     */
    public function getTrack()
    {
      return $this->Track;
    }

    /**
     * @param GetTracksResponseItem[] $Track
     * @return \app\modules\dvr\components\onvif\wsdl\GetTracksResponseList
     */
    public function setTrack(array $Track = null)
    {
      $this->Track = $Track;
      return $this;
    }

}
