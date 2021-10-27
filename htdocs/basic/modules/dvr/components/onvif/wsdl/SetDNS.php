<?php

namespace app\modules\dvr\components\onvif\wsdl;

class SetDNS
{

    /**
     * @var boolean $FromDHCP
     */
    protected $FromDHCP = null;

    /**
     * @var string $SearchDomain
     */
    protected $SearchDomain = null;

    /**
     * @var IPAddress $DNSManual
     */
    protected $DNSManual = null;

    /**
     * @param boolean $FromDHCP
     * @param string $SearchDomain
     * @param IPAddress $DNSManual
     */
    public function __construct($FromDHCP, $SearchDomain, $DNSManual)
    {
      $this->FromDHCP = $FromDHCP;
      $this->SearchDomain = $SearchDomain;
      $this->DNSManual = $DNSManual;
    }

    /**
     * @return boolean
     */
    public function getFromDHCP()
    {
      return $this->FromDHCP;
    }

    /**
     * @param boolean $FromDHCP
     * @return \app\modules\dvr\components\onvif\wsdl\SetDNS
     */
    public function setFromDHCP($FromDHCP)
    {
      $this->FromDHCP = $FromDHCP;
      return $this;
    }

    /**
     * @return string
     */
    public function getSearchDomain()
    {
      return $this->SearchDomain;
    }

    /**
     * @param string $SearchDomain
     * @return \app\modules\dvr\components\onvif\wsdl\SetDNS
     */
    public function setSearchDomain($SearchDomain)
    {
      $this->SearchDomain = $SearchDomain;
      return $this;
    }

    /**
     * @return IPAddress
     */
    public function getDNSManual()
    {
      return $this->DNSManual;
    }

    /**
     * @param IPAddress $DNSManual
     * @return \app\modules\dvr\components\onvif\wsdl\SetDNS
     */
    public function setDNSManual($DNSManual)
    {
      $this->DNSManual = $DNSManual;
      return $this;
    }

}
