<?php

namespace app\modules\dvr\components\onvif\wsdl;

class GetDNSResponse
{

    /**
     * @var DNSInformation $DNSInformation
     */
    protected $DNSInformation = null;

    /**
     * @param DNSInformation $DNSInformation
     */
    public function __construct($DNSInformation)
    {
      $this->DNSInformation = $DNSInformation;
    }

    /**
     * @return DNSInformation
     */
    public function getDNSInformation()
    {
      return $this->DNSInformation;
    }

    /**
     * @param DNSInformation $DNSInformation
     * @return \app\modules\dvr\components\onvif\wsdl\GetDNSResponse
     */
    public function setDNSInformation($DNSInformation)
    {
      $this->DNSInformation = $DNSInformation;
      return $this;
    }

}
