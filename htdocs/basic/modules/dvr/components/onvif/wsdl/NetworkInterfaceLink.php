<?php

namespace app\modules\dvr\components\onvif\wsdl;

class NetworkInterfaceLink
{

    /**
     * @var NetworkInterfaceConnectionSetting $AdminSettings
     */
    protected $AdminSettings = null;

    /**
     * @var NetworkInterfaceConnectionSetting $OperSettings
     */
    protected $OperSettings = null;

    /**
     * @var IANAIfTypes $InterfaceType
     */
    protected $InterfaceType = null;

    /**
     * @param NetworkInterfaceConnectionSetting $AdminSettings
     * @param NetworkInterfaceConnectionSetting $OperSettings
     * @param IANAIfTypes $InterfaceType
     */
    public function __construct($AdminSettings, $OperSettings, $InterfaceType)
    {
      $this->AdminSettings = $AdminSettings;
      $this->OperSettings = $OperSettings;
      $this->InterfaceType = $InterfaceType;
    }

    /**
     * @return NetworkInterfaceConnectionSetting
     */
    public function getAdminSettings()
    {
      return $this->AdminSettings;
    }

    /**
     * @param NetworkInterfaceConnectionSetting $AdminSettings
     * @return \app\modules\dvr\components\onvif\wsdl\NetworkInterfaceLink
     */
    public function setAdminSettings($AdminSettings)
    {
      $this->AdminSettings = $AdminSettings;
      return $this;
    }

    /**
     * @return NetworkInterfaceConnectionSetting
     */
    public function getOperSettings()
    {
      return $this->OperSettings;
    }

    /**
     * @param NetworkInterfaceConnectionSetting $OperSettings
     * @return \app\modules\dvr\components\onvif\wsdl\NetworkInterfaceLink
     */
    public function setOperSettings($OperSettings)
    {
      $this->OperSettings = $OperSettings;
      return $this;
    }

    /**
     * @return IANAIfTypes
     */
    public function getInterfaceType()
    {
      return $this->InterfaceType;
    }

    /**
     * @param IANAIfTypes $InterfaceType
     * @return \app\modules\dvr\components\onvif\wsdl\NetworkInterfaceLink
     */
    public function setInterfaceType($InterfaceType)
    {
      $this->InterfaceType = $InterfaceType;
      return $this;
    }

}
