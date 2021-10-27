<?php

namespace app\modules\dvr\components\onvif\wsdl;

class Dot11Capabilities
{

    /**
     * @var boolean $TKIP
     */
    protected $TKIP = null;

    /**
     * @var boolean $ScanAvailableNetworks
     */
    protected $ScanAvailableNetworks = null;

    /**
     * @var boolean $MultipleConfiguration
     */
    protected $MultipleConfiguration = null;

    /**
     * @var boolean $AdHocStationMode
     */
    protected $AdHocStationMode = null;

    /**
     * @var boolean $WEP
     */
    protected $WEP = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param boolean $TKIP
     * @param boolean $ScanAvailableNetworks
     * @param boolean $MultipleConfiguration
     * @param boolean $AdHocStationMode
     * @param boolean $WEP
     * @param string $any
     */
    public function __construct($TKIP, $ScanAvailableNetworks, $MultipleConfiguration, $AdHocStationMode, $WEP, $any)
    {
      $this->TKIP = $TKIP;
      $this->ScanAvailableNetworks = $ScanAvailableNetworks;
      $this->MultipleConfiguration = $MultipleConfiguration;
      $this->AdHocStationMode = $AdHocStationMode;
      $this->WEP = $WEP;
      $this->any = $any;
    }

    /**
     * @return boolean
     */
    public function getTKIP()
    {
      return $this->TKIP;
    }

    /**
     * @param boolean $TKIP
     * @return \app\modules\dvr\components\onvif\wsdl\Dot11Capabilities
     */
    public function setTKIP($TKIP)
    {
      $this->TKIP = $TKIP;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getScanAvailableNetworks()
    {
      return $this->ScanAvailableNetworks;
    }

    /**
     * @param boolean $ScanAvailableNetworks
     * @return \app\modules\dvr\components\onvif\wsdl\Dot11Capabilities
     */
    public function setScanAvailableNetworks($ScanAvailableNetworks)
    {
      $this->ScanAvailableNetworks = $ScanAvailableNetworks;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMultipleConfiguration()
    {
      return $this->MultipleConfiguration;
    }

    /**
     * @param boolean $MultipleConfiguration
     * @return \app\modules\dvr\components\onvif\wsdl\Dot11Capabilities
     */
    public function setMultipleConfiguration($MultipleConfiguration)
    {
      $this->MultipleConfiguration = $MultipleConfiguration;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAdHocStationMode()
    {
      return $this->AdHocStationMode;
    }

    /**
     * @param boolean $AdHocStationMode
     * @return \app\modules\dvr\components\onvif\wsdl\Dot11Capabilities
     */
    public function setAdHocStationMode($AdHocStationMode)
    {
      $this->AdHocStationMode = $AdHocStationMode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getWEP()
    {
      return $this->WEP;
    }

    /**
     * @param boolean $WEP
     * @return \app\modules\dvr\components\onvif\wsdl\Dot11Capabilities
     */
    public function setWEP($WEP)
    {
      $this->WEP = $WEP;
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
     * @return \app\modules\dvr\components\onvif\wsdl\Dot11Capabilities
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
