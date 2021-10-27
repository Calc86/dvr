<?php

namespace app\modules\dvr\components\onvif\wsdl;

class SetDPAddresses
{

    /**
     * @var NetworkHost $DPAddress
     */
    protected $DPAddress = null;

    /**
     * @param NetworkHost $DPAddress
     */
    public function __construct($DPAddress)
    {
      $this->DPAddress = $DPAddress;
    }

    /**
     * @return NetworkHost
     */
    public function getDPAddress()
    {
      return $this->DPAddress;
    }

    /**
     * @param NetworkHost $DPAddress
     * @return \app\modules\dvr\components\onvif\wsdl\SetDPAddresses
     */
    public function setDPAddress($DPAddress)
    {
      $this->DPAddress = $DPAddress;
      return $this;
    }

}
