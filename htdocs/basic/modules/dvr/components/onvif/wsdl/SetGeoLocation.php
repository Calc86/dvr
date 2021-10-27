<?php

namespace app\modules\dvr\components\onvif\wsdl;

class SetGeoLocation
{

    /**
     * @var LocationEntity $Location
     */
    protected $Location = null;

    /**
     * @param LocationEntity $Location
     */
    public function __construct($Location)
    {
      $this->Location = $Location;
    }

    /**
     * @return LocationEntity
     */
    public function getLocation()
    {
      return $this->Location;
    }

    /**
     * @param LocationEntity $Location
     * @return \app\modules\dvr\components\onvif\wsdl\SetGeoLocation
     */
    public function setLocation($Location)
    {
      $this->Location = $Location;
      return $this;
    }

}
