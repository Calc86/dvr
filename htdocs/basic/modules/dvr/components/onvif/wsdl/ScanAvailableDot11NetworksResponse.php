<?php

namespace app\modules\dvr\components\onvif\wsdl;

class ScanAvailableDot11NetworksResponse
{

    /**
     * @var Dot11AvailableNetworks $Networks
     */
    protected $Networks = null;

    /**
     * @param Dot11AvailableNetworks $Networks
     */
    public function __construct($Networks)
    {
      $this->Networks = $Networks;
    }

    /**
     * @return Dot11AvailableNetworks
     */
    public function getNetworks()
    {
      return $this->Networks;
    }

    /**
     * @param Dot11AvailableNetworks $Networks
     * @return \app\modules\dvr\components\onvif\wsdl\ScanAvailableDot11NetworksResponse
     */
    public function setNetworks($Networks)
    {
      $this->Networks = $Networks;
      return $this;
    }

}
