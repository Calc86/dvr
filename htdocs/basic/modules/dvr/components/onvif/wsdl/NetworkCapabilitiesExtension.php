<?php

namespace app\modules\dvr\components\onvif\wsdl;

class NetworkCapabilitiesExtension
{

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var boolean $Dot11Configuration
     */
    protected $Dot11Configuration = null;

    /**
     * @var NetworkCapabilitiesExtension2 $Extension
     */
    protected $Extension = null;

    /**
     * @param string $any
     */
    public function __construct($any)
    {
      $this->any = $any;
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
     * @return \app\modules\dvr\components\onvif\wsdl\NetworkCapabilitiesExtension
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDot11Configuration()
    {
      return $this->Dot11Configuration;
    }

    /**
     * @param boolean $Dot11Configuration
     * @return \app\modules\dvr\components\onvif\wsdl\NetworkCapabilitiesExtension
     */
    public function setDot11Configuration($Dot11Configuration)
    {
      $this->Dot11Configuration = $Dot11Configuration;
      return $this;
    }

    /**
     * @return NetworkCapabilitiesExtension2
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param NetworkCapabilitiesExtension2 $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\NetworkCapabilitiesExtension
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
