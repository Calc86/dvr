<?php

namespace app\modules\dvr\components\onvif\wsdl;

class GeoLocation
{

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var float $lon
     */
    protected $lon = null;

    /**
     * @var float $lat
     */
    protected $lat = null;

    /**
     * @var float $elevation
     */
    protected $elevation = null;

    /**
     * @param string $any
     * @param float $lon
     * @param float $lat
     * @param float $elevation
     */
    public function __construct($any, $lon, $lat, $elevation)
    {
      $this->any = $any;
      $this->lon = $lon;
      $this->lat = $lat;
      $this->elevation = $elevation;
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
     * @return \app\modules\dvr\components\onvif\wsdl\GeoLocation
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return float
     */
    public function getLon()
    {
      return $this->lon;
    }

    /**
     * @param float $lon
     * @return \app\modules\dvr\components\onvif\wsdl\GeoLocation
     */
    public function setLon($lon)
    {
      $this->lon = $lon;
      return $this;
    }

    /**
     * @return float
     */
    public function getLat()
    {
      return $this->lat;
    }

    /**
     * @param float $lat
     * @return \app\modules\dvr\components\onvif\wsdl\GeoLocation
     */
    public function setLat($lat)
    {
      $this->lat = $lat;
      return $this;
    }

    /**
     * @return float
     */
    public function getElevation()
    {
      return $this->elevation;
    }

    /**
     * @param float $elevation
     * @return \app\modules\dvr\components\onvif\wsdl\GeoLocation
     */
    public function setElevation($elevation)
    {
      $this->elevation = $elevation;
      return $this;
    }

}
