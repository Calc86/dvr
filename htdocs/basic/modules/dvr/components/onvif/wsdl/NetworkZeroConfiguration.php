<?php

namespace app\modules\dvr\components\onvif\wsdl;

class NetworkZeroConfiguration
{

    /**
     * @var ReferenceToken $InterfaceToken
     */
    protected $InterfaceToken = null;

    /**
     * @var boolean $Enabled
     */
    protected $Enabled = null;

    /**
     * @var IPv4Address[] $Addresses
     */
    protected $Addresses = null;

    /**
     * @var NetworkZeroConfigurationExtension $Extension
     */
    protected $Extension = null;

    /**
     * @param ReferenceToken $InterfaceToken
     * @param boolean $Enabled
     */
    public function __construct($InterfaceToken, $Enabled)
    {
      $this->InterfaceToken = $InterfaceToken;
      $this->Enabled = $Enabled;
    }

    /**
     * @return ReferenceToken
     */
    public function getInterfaceToken()
    {
      return $this->InterfaceToken;
    }

    /**
     * @param ReferenceToken $InterfaceToken
     * @return \app\modules\dvr\components\onvif\wsdl\NetworkZeroConfiguration
     */
    public function setInterfaceToken($InterfaceToken)
    {
      $this->InterfaceToken = $InterfaceToken;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnabled()
    {
      return $this->Enabled;
    }

    /**
     * @param boolean $Enabled
     * @return \app\modules\dvr\components\onvif\wsdl\NetworkZeroConfiguration
     */
    public function setEnabled($Enabled)
    {
      $this->Enabled = $Enabled;
      return $this;
    }

    /**
     * @return IPv4Address[]
     */
    public function getAddresses()
    {
      return $this->Addresses;
    }

    /**
     * @param IPv4Address[] $Addresses
     * @return \app\modules\dvr\components\onvif\wsdl\NetworkZeroConfiguration
     */
    public function setAddresses(array $Addresses = null)
    {
      $this->Addresses = $Addresses;
      return $this;
    }

    /**
     * @return NetworkZeroConfigurationExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param NetworkZeroConfigurationExtension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\NetworkZeroConfiguration
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
