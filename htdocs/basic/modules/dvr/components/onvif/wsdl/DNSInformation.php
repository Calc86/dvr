<?php

namespace app\modules\dvr\components\onvif\wsdl;

class DNSInformation
{

    /**
     * @var boolean $FromDHCP
     */
    protected $FromDHCP = null;

    /**
     * @var token[] $SearchDomain
     */
    protected $SearchDomain = null;

    /**
     * @var IPAddress[] $DNSFromDHCP
     */
    protected $DNSFromDHCP = null;

    /**
     * @var IPAddress[] $DNSManual
     */
    protected $DNSManual = null;

    /**
     * @var DNSInformationExtension $Extension
     */
    protected $Extension = null;

    /**
     * @param boolean $FromDHCP
     */
    public function __construct($FromDHCP)
    {
      $this->FromDHCP = $FromDHCP;
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
     * @return \app\modules\dvr\components\onvif\wsdl\DNSInformation
     */
    public function setFromDHCP($FromDHCP)
    {
      $this->FromDHCP = $FromDHCP;
      return $this;
    }

    /**
     * @return token[]
     */
    public function getSearchDomain()
    {
      return $this->SearchDomain;
    }

    /**
     * @param token[] $SearchDomain
     * @return \app\modules\dvr\components\onvif\wsdl\DNSInformation
     */
    public function setSearchDomain(array $SearchDomain = null)
    {
      $this->SearchDomain = $SearchDomain;
      return $this;
    }

    /**
     * @return IPAddress[]
     */
    public function getDNSFromDHCP()
    {
      return $this->DNSFromDHCP;
    }

    /**
     * @param IPAddress[] $DNSFromDHCP
     * @return \app\modules\dvr\components\onvif\wsdl\DNSInformation
     */
    public function setDNSFromDHCP(array $DNSFromDHCP = null)
    {
      $this->DNSFromDHCP = $DNSFromDHCP;
      return $this;
    }

    /**
     * @return IPAddress[]
     */
    public function getDNSManual()
    {
      return $this->DNSManual;
    }

    /**
     * @param IPAddress[] $DNSManual
     * @return \app\modules\dvr\components\onvif\wsdl\DNSInformation
     */
    public function setDNSManual(array $DNSManual = null)
    {
      $this->DNSManual = $DNSManual;
      return $this;
    }

    /**
     * @return DNSInformationExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param DNSInformationExtension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\DNSInformation
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
