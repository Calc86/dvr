<?php

namespace app\modules\dvr\components\onvif\wsdl;

class NetworkInterfaceSetConfigurationExtension
{

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var Dot3Configuration[] $Dot3
     */
    protected $Dot3 = null;

    /**
     * @var Dot11Configuration[] $Dot11
     */
    protected $Dot11 = null;

    /**
     * @var NetworkInterfaceSetConfigurationExtension2 $Extension
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
     * @return \app\modules\dvr\components\onvif\wsdl\NetworkInterfaceSetConfigurationExtension
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return Dot3Configuration[]
     */
    public function getDot3()
    {
      return $this->Dot3;
    }

    /**
     * @param Dot3Configuration[] $Dot3
     * @return \app\modules\dvr\components\onvif\wsdl\NetworkInterfaceSetConfigurationExtension
     */
    public function setDot3(array $Dot3 = null)
    {
      $this->Dot3 = $Dot3;
      return $this;
    }

    /**
     * @return Dot11Configuration[]
     */
    public function getDot11()
    {
      return $this->Dot11;
    }

    /**
     * @param Dot11Configuration[] $Dot11
     * @return \app\modules\dvr\components\onvif\wsdl\NetworkInterfaceSetConfigurationExtension
     */
    public function setDot11(array $Dot11 = null)
    {
      $this->Dot11 = $Dot11;
      return $this;
    }

    /**
     * @return NetworkInterfaceSetConfigurationExtension2
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param NetworkInterfaceSetConfigurationExtension2 $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\NetworkInterfaceSetConfigurationExtension
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
