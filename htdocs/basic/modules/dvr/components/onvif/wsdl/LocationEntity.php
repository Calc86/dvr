<?php

namespace app\modules\dvr\components\onvif\wsdl;

class LocationEntity
{

    /**
     * @var GeoLocation $GeoLocation
     */
    protected $GeoLocation = null;

    /**
     * @var GeoOrientation $GeoOrientation
     */
    protected $GeoOrientation = null;

    /**
     * @var LocalLocation $LocalLocation
     */
    protected $LocalLocation = null;

    /**
     * @var LocalOrientation $LocalOrientation
     */
    protected $LocalOrientation = null;

    /**
     * @var string $Entity
     */
    protected $Entity = null;

    /**
     * @var ReferenceToken $Token
     */
    protected $Token = null;

    /**
     * @var boolean $Fixed
     */
    protected $Fixed = null;

    /**
     * @var anyURI $GeoSource
     */
    protected $GeoSource = null;

    /**
     * @var boolean $AutoGeo
     */
    protected $AutoGeo = null;

    /**
     * @param string $Entity
     * @param ReferenceToken $Token
     * @param boolean $Fixed
     * @param anyURI $GeoSource
     * @param boolean $AutoGeo
     */
    public function __construct($Entity, $Token, $Fixed, $GeoSource, $AutoGeo)
    {
      $this->Entity = $Entity;
      $this->Token = $Token;
      $this->Fixed = $Fixed;
      $this->GeoSource = $GeoSource;
      $this->AutoGeo = $AutoGeo;
    }

    /**
     * @return GeoLocation
     */
    public function getGeoLocation()
    {
      return $this->GeoLocation;
    }

    /**
     * @param GeoLocation $GeoLocation
     * @return \app\modules\dvr\components\onvif\wsdl\LocationEntity
     */
    public function setGeoLocation($GeoLocation)
    {
      $this->GeoLocation = $GeoLocation;
      return $this;
    }

    /**
     * @return GeoOrientation
     */
    public function getGeoOrientation()
    {
      return $this->GeoOrientation;
    }

    /**
     * @param GeoOrientation $GeoOrientation
     * @return \app\modules\dvr\components\onvif\wsdl\LocationEntity
     */
    public function setGeoOrientation($GeoOrientation)
    {
      $this->GeoOrientation = $GeoOrientation;
      return $this;
    }

    /**
     * @return LocalLocation
     */
    public function getLocalLocation()
    {
      return $this->LocalLocation;
    }

    /**
     * @param LocalLocation $LocalLocation
     * @return \app\modules\dvr\components\onvif\wsdl\LocationEntity
     */
    public function setLocalLocation($LocalLocation)
    {
      $this->LocalLocation = $LocalLocation;
      return $this;
    }

    /**
     * @return LocalOrientation
     */
    public function getLocalOrientation()
    {
      return $this->LocalOrientation;
    }

    /**
     * @param LocalOrientation $LocalOrientation
     * @return \app\modules\dvr\components\onvif\wsdl\LocationEntity
     */
    public function setLocalOrientation($LocalOrientation)
    {
      $this->LocalOrientation = $LocalOrientation;
      return $this;
    }

    /**
     * @return string
     */
    public function getEntity()
    {
      return $this->Entity;
    }

    /**
     * @param string $Entity
     * @return \app\modules\dvr\components\onvif\wsdl\LocationEntity
     */
    public function setEntity($Entity)
    {
      $this->Entity = $Entity;
      return $this;
    }

    /**
     * @return ReferenceToken
     */
    public function getToken()
    {
      return $this->Token;
    }

    /**
     * @param ReferenceToken $Token
     * @return \app\modules\dvr\components\onvif\wsdl\LocationEntity
     */
    public function setToken($Token)
    {
      $this->Token = $Token;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFixed()
    {
      return $this->Fixed;
    }

    /**
     * @param boolean $Fixed
     * @return \app\modules\dvr\components\onvif\wsdl\LocationEntity
     */
    public function setFixed($Fixed)
    {
      $this->Fixed = $Fixed;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getGeoSource()
    {
      return $this->GeoSource;
    }

    /**
     * @param anyURI $GeoSource
     * @return \app\modules\dvr\components\onvif\wsdl\LocationEntity
     */
    public function setGeoSource($GeoSource)
    {
      $this->GeoSource = $GeoSource;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAutoGeo()
    {
      return $this->AutoGeo;
    }

    /**
     * @param boolean $AutoGeo
     * @return \app\modules\dvr\components\onvif\wsdl\LocationEntity
     */
    public function setAutoGeo($AutoGeo)
    {
      $this->AutoGeo = $AutoGeo;
      return $this;
    }

}
