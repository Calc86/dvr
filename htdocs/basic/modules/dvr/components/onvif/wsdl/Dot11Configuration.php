<?php

namespace app\modules\dvr\components\onvif\wsdl;

class Dot11Configuration
{

    /**
     * @var Dot11SSIDType $SSID
     */
    protected $SSID = null;

    /**
     * @var Dot11StationMode $Mode
     */
    protected $Mode = null;

    /**
     * @var Name $Alias
     */
    protected $Alias = null;

    /**
     * @var NetworkInterfaceConfigPriority $Priority
     */
    protected $Priority = null;

    /**
     * @var Dot11SecurityConfiguration $Security
     */
    protected $Security = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param Dot11SSIDType $SSID
     * @param Dot11StationMode $Mode
     * @param Name $Alias
     * @param NetworkInterfaceConfigPriority $Priority
     * @param Dot11SecurityConfiguration $Security
     * @param string $any
     */
    public function __construct($SSID, $Mode, $Alias, $Priority, $Security, $any)
    {
      $this->SSID = $SSID;
      $this->Mode = $Mode;
      $this->Alias = $Alias;
      $this->Priority = $Priority;
      $this->Security = $Security;
      $this->any = $any;
    }

    /**
     * @return Dot11SSIDType
     */
    public function getSSID()
    {
      return $this->SSID;
    }

    /**
     * @param Dot11SSIDType $SSID
     * @return \app\modules\dvr\components\onvif\wsdl\Dot11Configuration
     */
    public function setSSID($SSID)
    {
      $this->SSID = $SSID;
      return $this;
    }

    /**
     * @return Dot11StationMode
     */
    public function getMode()
    {
      return $this->Mode;
    }

    /**
     * @param Dot11StationMode $Mode
     * @return \app\modules\dvr\components\onvif\wsdl\Dot11Configuration
     */
    public function setMode($Mode)
    {
      $this->Mode = $Mode;
      return $this;
    }

    /**
     * @return Name
     */
    public function getAlias()
    {
      return $this->Alias;
    }

    /**
     * @param Name $Alias
     * @return \app\modules\dvr\components\onvif\wsdl\Dot11Configuration
     */
    public function setAlias($Alias)
    {
      $this->Alias = $Alias;
      return $this;
    }

    /**
     * @return NetworkInterfaceConfigPriority
     */
    public function getPriority()
    {
      return $this->Priority;
    }

    /**
     * @param NetworkInterfaceConfigPriority $Priority
     * @return \app\modules\dvr\components\onvif\wsdl\Dot11Configuration
     */
    public function setPriority($Priority)
    {
      $this->Priority = $Priority;
      return $this;
    }

    /**
     * @return Dot11SecurityConfiguration
     */
    public function getSecurity()
    {
      return $this->Security;
    }

    /**
     * @param Dot11SecurityConfiguration $Security
     * @return \app\modules\dvr\components\onvif\wsdl\Dot11Configuration
     */
    public function setSecurity($Security)
    {
      $this->Security = $Security;
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
     * @return \app\modules\dvr\components\onvif\wsdl\Dot11Configuration
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
