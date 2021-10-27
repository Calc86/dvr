<?php

namespace app\modules\dvr\components\onvif\wsdl;

class Service
{

    /**
     * @var anyURI $Namespace
     */
    protected $Namespace = null;

    /**
     * @var anyURI $XAddr
     */
    protected $XAddr = null;

    /**
     * @var Capabilities $Capabilities
     */
    protected $Capabilities = null;

    /**
     * @var OnvifVersion $Version
     */
    protected $Version = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param anyURI $Namespace
     * @param anyURI $XAddr
     * @param OnvifVersion $Version
     * @param string $any
     */
    public function __construct($Namespace, $XAddr, $Version, $any)
    {
      $this->Namespace = $Namespace;
      $this->XAddr = $XAddr;
      $this->Version = $Version;
      $this->any = $any;
    }

    /**
     * @return anyURI
     */
    public function getNamespace()
    {
      return $this->Namespace;
    }

    /**
     * @param anyURI $Namespace
     * @return \app\modules\dvr\components\onvif\wsdl\Service
     */
    public function setNamespace($Namespace)
    {
      $this->Namespace = $Namespace;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getXAddr()
    {
      return $this->XAddr;
    }

    /**
     * @param anyURI $XAddr
     * @return \app\modules\dvr\components\onvif\wsdl\Service
     */
    public function setXAddr($XAddr)
    {
      $this->XAddr = $XAddr;
      return $this;
    }

    /**
     * @return Capabilities
     */
    public function getCapabilities()
    {
      return $this->Capabilities;
    }

    /**
     * @param Capabilities $Capabilities
     * @return \app\modules\dvr\components\onvif\wsdl\Service
     */
    public function setCapabilities($Capabilities)
    {
      $this->Capabilities = $Capabilities;
      return $this;
    }

    /**
     * @return OnvifVersion
     */
    public function getVersion()
    {
      return $this->Version;
    }

    /**
     * @param OnvifVersion $Version
     * @return \app\modules\dvr\components\onvif\wsdl\Service
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
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
     * @return \app\modules\dvr\components\onvif\wsdl\Service
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
