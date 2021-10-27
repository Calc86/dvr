<?php

namespace app\modules\dvr\components\onvif\wsdl;

class NetworkCapabilities
{

    /**
     * @var boolean $IPFilter
     */
    protected $IPFilter = null;

    /**
     * @var boolean $ZeroConfiguration
     */
    protected $ZeroConfiguration = null;

    /**
     * @var boolean $IPVersion6
     */
    protected $IPVersion6 = null;

    /**
     * @var boolean $DynDNS
     */
    protected $DynDNS = null;

    /**
     * @var boolean $Dot11Configuration
     */
    protected $Dot11Configuration = null;

    /**
     * @var int $Dot1XConfigurations
     */
    protected $Dot1XConfigurations = null;

    /**
     * @var boolean $HostnameFromDHCP
     */
    protected $HostnameFromDHCP = null;

    /**
     * @var int $NTP
     */
    protected $NTP = null;

    /**
     * @var boolean $DHCPv6
     */
    protected $DHCPv6 = null;

    /**
     * @param boolean $IPFilter
     * @param boolean $ZeroConfiguration
     * @param boolean $IPVersion6
     * @param boolean $DynDNS
     * @param boolean $Dot11Configuration
     * @param int $Dot1XConfigurations
     * @param boolean $HostnameFromDHCP
     * @param int $NTP
     * @param boolean $DHCPv6
     */
    public function __construct($IPFilter, $ZeroConfiguration, $IPVersion6, $DynDNS, $Dot11Configuration, $Dot1XConfigurations, $HostnameFromDHCP, $NTP, $DHCPv6)
    {
      $this->IPFilter = $IPFilter;
      $this->ZeroConfiguration = $ZeroConfiguration;
      $this->IPVersion6 = $IPVersion6;
      $this->DynDNS = $DynDNS;
      $this->Dot11Configuration = $Dot11Configuration;
      $this->Dot1XConfigurations = $Dot1XConfigurations;
      $this->HostnameFromDHCP = $HostnameFromDHCP;
      $this->NTP = $NTP;
      $this->DHCPv6 = $DHCPv6;
    }

    /**
     * @return boolean
     */
    public function getIPFilter()
    {
      return $this->IPFilter;
    }

    /**
     * @param boolean $IPFilter
     * @return \app\modules\dvr\components\onvif\wsdl\NetworkCapabilities
     */
    public function setIPFilter($IPFilter)
    {
      $this->IPFilter = $IPFilter;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getZeroConfiguration()
    {
      return $this->ZeroConfiguration;
    }

    /**
     * @param boolean $ZeroConfiguration
     * @return \app\modules\dvr\components\onvif\wsdl\NetworkCapabilities
     */
    public function setZeroConfiguration($ZeroConfiguration)
    {
      $this->ZeroConfiguration = $ZeroConfiguration;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIPVersion6()
    {
      return $this->IPVersion6;
    }

    /**
     * @param boolean $IPVersion6
     * @return \app\modules\dvr\components\onvif\wsdl\NetworkCapabilities
     */
    public function setIPVersion6($IPVersion6)
    {
      $this->IPVersion6 = $IPVersion6;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDynDNS()
    {
      return $this->DynDNS;
    }

    /**
     * @param boolean $DynDNS
     * @return \app\modules\dvr\components\onvif\wsdl\NetworkCapabilities
     */
    public function setDynDNS($DynDNS)
    {
      $this->DynDNS = $DynDNS;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDot11Configuration()
    {
      return $this->Dot11Configuration;
    }

    /**
     * @param boolean $Dot11Configuration
     * @return \app\modules\dvr\components\onvif\wsdl\NetworkCapabilities
     */
    public function setDot11Configuration($Dot11Configuration)
    {
      $this->Dot11Configuration = $Dot11Configuration;
      return $this;
    }

    /**
     * @return int
     */
    public function getDot1XConfigurations()
    {
      return $this->Dot1XConfigurations;
    }

    /**
     * @param int $Dot1XConfigurations
     * @return \app\modules\dvr\components\onvif\wsdl\NetworkCapabilities
     */
    public function setDot1XConfigurations($Dot1XConfigurations)
    {
      $this->Dot1XConfigurations = $Dot1XConfigurations;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHostnameFromDHCP()
    {
      return $this->HostnameFromDHCP;
    }

    /**
     * @param boolean $HostnameFromDHCP
     * @return \app\modules\dvr\components\onvif\wsdl\NetworkCapabilities
     */
    public function setHostnameFromDHCP($HostnameFromDHCP)
    {
      $this->HostnameFromDHCP = $HostnameFromDHCP;
      return $this;
    }

    /**
     * @return int
     */
    public function getNTP()
    {
      return $this->NTP;
    }

    /**
     * @param int $NTP
     * @return \app\modules\dvr\components\onvif\wsdl\NetworkCapabilities
     */
    public function setNTP($NTP)
    {
      $this->NTP = $NTP;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDHCPv6()
    {
      return $this->DHCPv6;
    }

    /**
     * @param boolean $DHCPv6
     * @return \app\modules\dvr\components\onvif\wsdl\NetworkCapabilities
     */
    public function setDHCPv6($DHCPv6)
    {
      $this->DHCPv6 = $DHCPv6;
      return $this;
    }

}
