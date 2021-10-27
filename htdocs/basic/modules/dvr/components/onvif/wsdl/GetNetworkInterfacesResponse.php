<?php

namespace app\modules\dvr\components\onvif\wsdl;

class GetNetworkInterfacesResponse
{

    /**
     * @var NetworkInterface $NetworkInterfaces
     */
    protected $NetworkInterfaces = null;

    /**
     * @param NetworkInterface $NetworkInterfaces
     */
    public function __construct($NetworkInterfaces)
    {
      $this->NetworkInterfaces = $NetworkInterfaces;
    }

    /**
     * @return NetworkInterface
     */
    public function getNetworkInterfaces()
    {
      return $this->NetworkInterfaces;
    }

    /**
     * @param NetworkInterface $NetworkInterfaces
     * @return \app\modules\dvr\components\onvif\wsdl\GetNetworkInterfacesResponse
     */
    public function setNetworkInterfaces($NetworkInterfaces)
    {
      $this->NetworkInterfaces = $NetworkInterfaces;
      return $this;
    }

}
