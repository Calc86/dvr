<?php

namespace app\modules\dvr\components\onvif\wsdl;

class GetHostnameResponse
{

    /**
     * @var HostnameInformation $HostnameInformation
     */
    protected $HostnameInformation = null;

    /**
     * @param HostnameInformation $HostnameInformation
     */
    public function __construct($HostnameInformation)
    {
      $this->HostnameInformation = $HostnameInformation;
    }

    /**
     * @return HostnameInformation
     */
    public function getHostnameInformation()
    {
      return $this->HostnameInformation;
    }

    /**
     * @param HostnameInformation $HostnameInformation
     * @return \app\modules\dvr\components\onvif\wsdl\GetHostnameResponse
     */
    public function setHostnameInformation($HostnameInformation)
    {
      $this->HostnameInformation = $HostnameInformation;
      return $this;
    }

}
