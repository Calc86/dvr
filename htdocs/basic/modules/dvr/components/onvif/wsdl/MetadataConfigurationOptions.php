<?php

namespace app\modules\dvr\components\onvif\wsdl;

class MetadataConfigurationOptions
{

    /**
     * @var PTZStatusFilterOptions $PTZStatusFilterOptions
     */
    protected $PTZStatusFilterOptions = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var MetadataConfigurationOptionsExtension $Extension
     */
    protected $Extension = null;

    /**
     * @var boolean $GeoLocation
     */
    protected $GeoLocation = null;

    /**
     * @var int $MaxContentFilterSize
     */
    protected $MaxContentFilterSize = null;

    /**
     * @param PTZStatusFilterOptions $PTZStatusFilterOptions
     * @param string $any
     * @param boolean $GeoLocation
     * @param int $MaxContentFilterSize
     */
    public function __construct($PTZStatusFilterOptions, $any, $GeoLocation, $MaxContentFilterSize)
    {
      $this->PTZStatusFilterOptions = $PTZStatusFilterOptions;
      $this->any = $any;
      $this->GeoLocation = $GeoLocation;
      $this->MaxContentFilterSize = $MaxContentFilterSize;
    }

    /**
     * @return PTZStatusFilterOptions
     */
    public function getPTZStatusFilterOptions()
    {
      return $this->PTZStatusFilterOptions;
    }

    /**
     * @param PTZStatusFilterOptions $PTZStatusFilterOptions
     * @return \app\modules\dvr\components\onvif\wsdl\MetadataConfigurationOptions
     */
    public function setPTZStatusFilterOptions($PTZStatusFilterOptions)
    {
      $this->PTZStatusFilterOptions = $PTZStatusFilterOptions;
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
     * @return \app\modules\dvr\components\onvif\wsdl\MetadataConfigurationOptions
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return MetadataConfigurationOptionsExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param MetadataConfigurationOptionsExtension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\MetadataConfigurationOptions
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getGeoLocation()
    {
      return $this->GeoLocation;
    }

    /**
     * @param boolean $GeoLocation
     * @return \app\modules\dvr\components\onvif\wsdl\MetadataConfigurationOptions
     */
    public function setGeoLocation($GeoLocation)
    {
      $this->GeoLocation = $GeoLocation;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxContentFilterSize()
    {
      return $this->MaxContentFilterSize;
    }

    /**
     * @param int $MaxContentFilterSize
     * @return \app\modules\dvr\components\onvif\wsdl\MetadataConfigurationOptions
     */
    public function setMaxContentFilterSize($MaxContentFilterSize)
    {
      $this->MaxContentFilterSize = $MaxContentFilterSize;
      return $this;
    }

}
