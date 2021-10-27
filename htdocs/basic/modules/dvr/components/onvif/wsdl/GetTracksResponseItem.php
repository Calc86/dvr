<?php

namespace app\modules\dvr\components\onvif\wsdl;

class GetTracksResponseItem
{

    /**
     * @var TrackReference $TrackToken
     */
    protected $TrackToken = null;

    /**
     * @var TrackConfiguration $Configuration
     */
    protected $Configuration = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param TrackReference $TrackToken
     * @param TrackConfiguration $Configuration
     * @param string $any
     */
    public function __construct($TrackToken, $Configuration, $any)
    {
      $this->TrackToken = $TrackToken;
      $this->Configuration = $Configuration;
      $this->any = $any;
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
     * @return \app\modules\dvr\components\onvif\wsdl\GetTracksResponseItem
     */
    public function setTrackToken($TrackToken)
    {
      $this->TrackToken = $TrackToken;
      return $this;
    }

    /**
     * @return TrackConfiguration
     */
    public function getConfiguration()
    {
      return $this->Configuration;
    }

    /**
     * @param TrackConfiguration $Configuration
     * @return \app\modules\dvr\components\onvif\wsdl\GetTracksResponseItem
     */
    public function setConfiguration($Configuration)
    {
      $this->Configuration = $Configuration;
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
     * @return \app\modules\dvr\components\onvif\wsdl\GetTracksResponseItem
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
