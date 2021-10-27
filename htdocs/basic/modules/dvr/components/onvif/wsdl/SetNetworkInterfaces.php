<?php

namespace app\modules\dvr\components\onvif\wsdl;

class SetNetworkInterfaces
{

    /**
     * @var ReferenceToken $InterfaceToken
     */
    protected $InterfaceToken = null;

    /**
     * @var NetworkInterfaceSetConfiguration $NetworkInterface
     */
    protected $NetworkInterface = null;

    /**
     * @param ReferenceToken $InterfaceToken
     * @param NetworkInterfaceSetConfiguration $NetworkInterface
     */
    public function __construct($InterfaceToken, $NetworkInterface)
    {
      $this->InterfaceToken = $InterfaceToken;
      $this->NetworkInterface = $NetworkInterface;
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
     * @return \app\modules\dvr\components\onvif\wsdl\SetNetworkInterfaces
     */
    public function setInterfaceToken($InterfaceToken)
    {
      $this->InterfaceToken = $InterfaceToken;
      return $this;
    }

    /**
     * @return NetworkInterfaceSetConfiguration
     */
    public function getNetworkInterface()
    {
      return $this->NetworkInterface;
    }

    /**
     * @param NetworkInterfaceSetConfiguration $NetworkInterface
     * @return \app\modules\dvr\components\onvif\wsdl\SetNetworkInterfaces
     */
    public function setNetworkInterface($NetworkInterface)
    {
      $this->NetworkInterface = $NetworkInterface;
      return $this;
    }

}
