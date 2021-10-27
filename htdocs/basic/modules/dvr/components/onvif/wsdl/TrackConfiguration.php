<?php

namespace app\modules\dvr\components\onvif\wsdl;

class TrackConfiguration
{

    /**
     * @var TrackType $TrackType
     */
    protected $TrackType = null;

    /**
     * @var Description $Description
     */
    protected $Description = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param TrackType $TrackType
     * @param Description $Description
     * @param string $any
     */
    public function __construct($TrackType, $Description, $any)
    {
      $this->TrackType = $TrackType;
      $this->Description = $Description;
      $this->any = $any;
    }

    /**
     * @return TrackType
     */
    public function getTrackType()
    {
      return $this->TrackType;
    }

    /**
     * @param TrackType $TrackType
     * @return \app\modules\dvr\components\onvif\wsdl\TrackConfiguration
     */
    public function setTrackType($TrackType)
    {
      $this->TrackType = $TrackType;
      return $this;
    }

    /**
     * @return Description
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param Description $Description
     * @return \app\modules\dvr\components\onvif\wsdl\TrackConfiguration
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
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
     * @return \app\modules\dvr\components\onvif\wsdl\TrackConfiguration
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
