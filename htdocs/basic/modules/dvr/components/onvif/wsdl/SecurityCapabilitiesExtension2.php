<?php

namespace app\modules\dvr\components\onvif\wsdl;

class SecurityCapabilitiesExtension2
{

    /**
     * @var boolean $Dot1X
     */
    protected $Dot1X = null;

    /**
     * @var int[] $SupportedEAPMethod
     */
    protected $SupportedEAPMethod = null;

    /**
     * @var boolean $RemoteUserHandling
     */
    protected $RemoteUserHandling = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param boolean $Dot1X
     * @param boolean $RemoteUserHandling
     * @param string $any
     */
    public function __construct($Dot1X, $RemoteUserHandling, $any)
    {
      $this->Dot1X = $Dot1X;
      $this->RemoteUserHandling = $RemoteUserHandling;
      $this->any = $any;
    }

    /**
     * @return boolean
     */
    public function getDot1X()
    {
      return $this->Dot1X;
    }

    /**
     * @param boolean $Dot1X
     * @return \app\modules\dvr\components\onvif\wsdl\SecurityCapabilitiesExtension2
     */
    public function setDot1X($Dot1X)
    {
      $this->Dot1X = $Dot1X;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getSupportedEAPMethod()
    {
      return $this->SupportedEAPMethod;
    }

    /**
     * @param int[] $SupportedEAPMethod
     * @return \app\modules\dvr\components\onvif\wsdl\SecurityCapabilitiesExtension2
     */
    public function setSupportedEAPMethod(array $SupportedEAPMethod = null)
    {
      $this->SupportedEAPMethod = $SupportedEAPMethod;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRemoteUserHandling()
    {
      return $this->RemoteUserHandling;
    }

    /**
     * @param boolean $RemoteUserHandling
     * @return \app\modules\dvr\components\onvif\wsdl\SecurityCapabilitiesExtension2
     */
    public function setRemoteUserHandling($RemoteUserHandling)
    {
      $this->RemoteUserHandling = $RemoteUserHandling;
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
     * @return \app\modules\dvr\components\onvif\wsdl\SecurityCapabilitiesExtension2
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
