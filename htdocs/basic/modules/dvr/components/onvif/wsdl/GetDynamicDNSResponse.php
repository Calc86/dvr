<?php

namespace app\modules\dvr\components\onvif\wsdl;

class GetDynamicDNSResponse
{

    /**
     * @var DynamicDNSInformation $DynamicDNSInformation
     */
    protected $DynamicDNSInformation = null;

    /**
     * @param DynamicDNSInformation $DynamicDNSInformation
     */
    public function __construct($DynamicDNSInformation)
    {
      $this->DynamicDNSInformation = $DynamicDNSInformation;
    }

    /**
     * @return DynamicDNSInformation
     */
    public function getDynamicDNSInformation()
    {
      return $this->DynamicDNSInformation;
    }

    /**
     * @param DynamicDNSInformation $DynamicDNSInformation
     * @return \app\modules\dvr\components\onvif\wsdl\GetDynamicDNSResponse
     */
    public function setDynamicDNSInformation($DynamicDNSInformation)
    {
      $this->DynamicDNSInformation = $DynamicDNSInformation;
      return $this;
    }

}
