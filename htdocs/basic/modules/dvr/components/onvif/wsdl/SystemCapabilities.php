<?php

namespace app\modules\dvr\components\onvif\wsdl;

class SystemCapabilities
{

    /**
     * @var boolean $DiscoveryResolve
     */
    protected $DiscoveryResolve = null;

    /**
     * @var boolean $DiscoveryBye
     */
    protected $DiscoveryBye = null;

    /**
     * @var boolean $RemoteDiscovery
     */
    protected $RemoteDiscovery = null;

    /**
     * @var boolean $SystemBackup
     */
    protected $SystemBackup = null;

    /**
     * @var boolean $SystemLogging
     */
    protected $SystemLogging = null;

    /**
     * @var boolean $FirmwareUpgrade
     */
    protected $FirmwareUpgrade = null;

    /**
     * @var boolean $HttpFirmwareUpgrade
     */
    protected $HttpFirmwareUpgrade = null;

    /**
     * @var boolean $HttpSystemBackup
     */
    protected $HttpSystemBackup = null;

    /**
     * @var boolean $HttpSystemLogging
     */
    protected $HttpSystemLogging = null;

    /**
     * @var boolean $HttpSupportInformation
     */
    protected $HttpSupportInformation = null;

    /**
     * @var boolean $StorageConfiguration
     */
    protected $StorageConfiguration = null;

    /**
     * @var int $MaxStorageConfigurations
     */
    protected $MaxStorageConfigurations = null;

    /**
     * @var int $GeoLocationEntries
     */
    protected $GeoLocationEntries = null;

    /**
     * @var StringAttrList $AutoGeo
     */
    protected $AutoGeo = null;

    /**
     * @var StringAttrList $StorageTypesSupported
     */
    protected $StorageTypesSupported = null;

    /**
     * @var boolean $DiscoveryNotSupported
     */
    protected $DiscoveryNotSupported = null;

    /**
     * @var boolean $NetworkConfigNotSupported
     */
    protected $NetworkConfigNotSupported = null;

    /**
     * @var boolean $UserConfigNotSupported
     */
    protected $UserConfigNotSupported = null;

    /**
     * @param boolean $DiscoveryResolve
     * @param boolean $DiscoveryBye
     * @param boolean $RemoteDiscovery
     * @param boolean $SystemBackup
     * @param boolean $SystemLogging
     * @param boolean $FirmwareUpgrade
     * @param boolean $HttpFirmwareUpgrade
     * @param boolean $HttpSystemBackup
     * @param boolean $HttpSystemLogging
     * @param boolean $HttpSupportInformation
     * @param boolean $StorageConfiguration
     * @param int $MaxStorageConfigurations
     * @param int $GeoLocationEntries
     * @param StringAttrList $AutoGeo
     * @param StringAttrList $StorageTypesSupported
     * @param boolean $DiscoveryNotSupported
     * @param boolean $NetworkConfigNotSupported
     * @param boolean $UserConfigNotSupported
     */
    public function __construct($DiscoveryResolve, $DiscoveryBye, $RemoteDiscovery, $SystemBackup, $SystemLogging, $FirmwareUpgrade, $HttpFirmwareUpgrade, $HttpSystemBackup, $HttpSystemLogging, $HttpSupportInformation, $StorageConfiguration, $MaxStorageConfigurations, $GeoLocationEntries, $AutoGeo, $StorageTypesSupported, $DiscoveryNotSupported, $NetworkConfigNotSupported, $UserConfigNotSupported)
    {
      $this->DiscoveryResolve = $DiscoveryResolve;
      $this->DiscoveryBye = $DiscoveryBye;
      $this->RemoteDiscovery = $RemoteDiscovery;
      $this->SystemBackup = $SystemBackup;
      $this->SystemLogging = $SystemLogging;
      $this->FirmwareUpgrade = $FirmwareUpgrade;
      $this->HttpFirmwareUpgrade = $HttpFirmwareUpgrade;
      $this->HttpSystemBackup = $HttpSystemBackup;
      $this->HttpSystemLogging = $HttpSystemLogging;
      $this->HttpSupportInformation = $HttpSupportInformation;
      $this->StorageConfiguration = $StorageConfiguration;
      $this->MaxStorageConfigurations = $MaxStorageConfigurations;
      $this->GeoLocationEntries = $GeoLocationEntries;
      $this->AutoGeo = $AutoGeo;
      $this->StorageTypesSupported = $StorageTypesSupported;
      $this->DiscoveryNotSupported = $DiscoveryNotSupported;
      $this->NetworkConfigNotSupported = $NetworkConfigNotSupported;
      $this->UserConfigNotSupported = $UserConfigNotSupported;
    }

    /**
     * @return boolean
     */
    public function getDiscoveryResolve()
    {
      return $this->DiscoveryResolve;
    }

    /**
     * @param boolean $DiscoveryResolve
     * @return \app\modules\dvr\components\onvif\wsdl\SystemCapabilities
     */
    public function setDiscoveryResolve($DiscoveryResolve)
    {
      $this->DiscoveryResolve = $DiscoveryResolve;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDiscoveryBye()
    {
      return $this->DiscoveryBye;
    }

    /**
     * @param boolean $DiscoveryBye
     * @return \app\modules\dvr\components\onvif\wsdl\SystemCapabilities
     */
    public function setDiscoveryBye($DiscoveryBye)
    {
      $this->DiscoveryBye = $DiscoveryBye;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRemoteDiscovery()
    {
      return $this->RemoteDiscovery;
    }

    /**
     * @param boolean $RemoteDiscovery
     * @return \app\modules\dvr\components\onvif\wsdl\SystemCapabilities
     */
    public function setRemoteDiscovery($RemoteDiscovery)
    {
      $this->RemoteDiscovery = $RemoteDiscovery;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSystemBackup()
    {
      return $this->SystemBackup;
    }

    /**
     * @param boolean $SystemBackup
     * @return \app\modules\dvr\components\onvif\wsdl\SystemCapabilities
     */
    public function setSystemBackup($SystemBackup)
    {
      $this->SystemBackup = $SystemBackup;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSystemLogging()
    {
      return $this->SystemLogging;
    }

    /**
     * @param boolean $SystemLogging
     * @return \app\modules\dvr\components\onvif\wsdl\SystemCapabilities
     */
    public function setSystemLogging($SystemLogging)
    {
      $this->SystemLogging = $SystemLogging;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFirmwareUpgrade()
    {
      return $this->FirmwareUpgrade;
    }

    /**
     * @param boolean $FirmwareUpgrade
     * @return \app\modules\dvr\components\onvif\wsdl\SystemCapabilities
     */
    public function setFirmwareUpgrade($FirmwareUpgrade)
    {
      $this->FirmwareUpgrade = $FirmwareUpgrade;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHttpFirmwareUpgrade()
    {
      return $this->HttpFirmwareUpgrade;
    }

    /**
     * @param boolean $HttpFirmwareUpgrade
     * @return \app\modules\dvr\components\onvif\wsdl\SystemCapabilities
     */
    public function setHttpFirmwareUpgrade($HttpFirmwareUpgrade)
    {
      $this->HttpFirmwareUpgrade = $HttpFirmwareUpgrade;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHttpSystemBackup()
    {
      return $this->HttpSystemBackup;
    }

    /**
     * @param boolean $HttpSystemBackup
     * @return \app\modules\dvr\components\onvif\wsdl\SystemCapabilities
     */
    public function setHttpSystemBackup($HttpSystemBackup)
    {
      $this->HttpSystemBackup = $HttpSystemBackup;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHttpSystemLogging()
    {
      return $this->HttpSystemLogging;
    }

    /**
     * @param boolean $HttpSystemLogging
     * @return \app\modules\dvr\components\onvif\wsdl\SystemCapabilities
     */
    public function setHttpSystemLogging($HttpSystemLogging)
    {
      $this->HttpSystemLogging = $HttpSystemLogging;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHttpSupportInformation()
    {
      return $this->HttpSupportInformation;
    }

    /**
     * @param boolean $HttpSupportInformation
     * @return \app\modules\dvr\components\onvif\wsdl\SystemCapabilities
     */
    public function setHttpSupportInformation($HttpSupportInformation)
    {
      $this->HttpSupportInformation = $HttpSupportInformation;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getStorageConfiguration()
    {
      return $this->StorageConfiguration;
    }

    /**
     * @param boolean $StorageConfiguration
     * @return \app\modules\dvr\components\onvif\wsdl\SystemCapabilities
     */
    public function setStorageConfiguration($StorageConfiguration)
    {
      $this->StorageConfiguration = $StorageConfiguration;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxStorageConfigurations()
    {
      return $this->MaxStorageConfigurations;
    }

    /**
     * @param int $MaxStorageConfigurations
     * @return \app\modules\dvr\components\onvif\wsdl\SystemCapabilities
     */
    public function setMaxStorageConfigurations($MaxStorageConfigurations)
    {
      $this->MaxStorageConfigurations = $MaxStorageConfigurations;
      return $this;
    }

    /**
     * @return int
     */
    public function getGeoLocationEntries()
    {
      return $this->GeoLocationEntries;
    }

    /**
     * @param int $GeoLocationEntries
     * @return \app\modules\dvr\components\onvif\wsdl\SystemCapabilities
     */
    public function setGeoLocationEntries($GeoLocationEntries)
    {
      $this->GeoLocationEntries = $GeoLocationEntries;
      return $this;
    }

    /**
     * @return StringAttrList
     */
    public function getAutoGeo()
    {
      return $this->AutoGeo;
    }

    /**
     * @param StringAttrList $AutoGeo
     * @return \app\modules\dvr\components\onvif\wsdl\SystemCapabilities
     */
    public function setAutoGeo($AutoGeo)
    {
      $this->AutoGeo = $AutoGeo;
      return $this;
    }

    /**
     * @return StringAttrList
     */
    public function getStorageTypesSupported()
    {
      return $this->StorageTypesSupported;
    }

    /**
     * @param StringAttrList $StorageTypesSupported
     * @return \app\modules\dvr\components\onvif\wsdl\SystemCapabilities
     */
    public function setStorageTypesSupported($StorageTypesSupported)
    {
      $this->StorageTypesSupported = $StorageTypesSupported;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDiscoveryNotSupported()
    {
      return $this->DiscoveryNotSupported;
    }

    /**
     * @param boolean $DiscoveryNotSupported
     * @return \app\modules\dvr\components\onvif\wsdl\SystemCapabilities
     */
    public function setDiscoveryNotSupported($DiscoveryNotSupported)
    {
      $this->DiscoveryNotSupported = $DiscoveryNotSupported;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNetworkConfigNotSupported()
    {
      return $this->NetworkConfigNotSupported;
    }

    /**
     * @param boolean $NetworkConfigNotSupported
     * @return \app\modules\dvr\components\onvif\wsdl\SystemCapabilities
     */
    public function setNetworkConfigNotSupported($NetworkConfigNotSupported)
    {
      $this->NetworkConfigNotSupported = $NetworkConfigNotSupported;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUserConfigNotSupported()
    {
      return $this->UserConfigNotSupported;
    }

    /**
     * @param boolean $UserConfigNotSupported
     * @return \app\modules\dvr\components\onvif\wsdl\SystemCapabilities
     */
    public function setUserConfigNotSupported($UserConfigNotSupported)
    {
      $this->UserConfigNotSupported = $UserConfigNotSupported;
      return $this;
    }

}
