<?php

namespace app\modules\dvr\components\onvif\wsdl;

class NetworkInterfaceExtension
{

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var IANAIfTypes $InterfaceType
     */
    protected $InterfaceType = null;

    /**
     * @var Dot3Configuration[] $Dot3
     */
    protected $Dot3 = null;

    /**
     * @var Dot11Configuration[] $Dot11
     */
    protected $Dot11 = null;

    /**
     * @var NetworkInterfaceExtension2 $Extension
     */
    protected $Extension = null;

    /**
     * @param string $any
     * @param IANAIfTypes $InterfaceType
     */
    public function __construct($any, $InterfaceType)
    {
      $this->any = $any;
      $this->InterfaceType = $InterfaceType;
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
     * @return \app\modules\dvr\components\onvif\wsdl\NetworkInterfaceExtension
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return IANAIfTypes
     */
    public function getInterfaceType()
    {
      return $this->InterfaceType;
    }

    /**
     * @param IANAIfTypes $InterfaceType
     * @return \app\modules\dvr\components\onvif\wsdl\NetworkInterfaceExtension
     */
    public function setInterfaceType($InterfaceType)
    {
      $this->InterfaceType = $InterfaceType;
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
     * @return \app\modules\dvr\components\onvif\wsdl\NetworkInterfaceExtension
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
     * @return \app\modules\dvr\components\onvif\wsdl\NetworkInterfaceExtension
     */
    public function setDot11(array $Dot11 = null)
    {
      $this->Dot11 = $Dot11;
      return $this;
    }

    /**
     * @return NetworkInterfaceExtension2
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param NetworkInterfaceExtension2 $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\NetworkInterfaceExtension
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
