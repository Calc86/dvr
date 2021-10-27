<?php

namespace app\modules\dvr\components\onvif\wsdl;

class GetNetworkDefaultGatewayResponse
{

    /**
     * @var NetworkGateway $NetworkGateway
     */
    protected $NetworkGateway = null;

    /**
     * @param NetworkGateway $NetworkGateway
     */
    public function __construct($NetworkGateway)
    {
      $this->NetworkGateway = $NetworkGateway;
    }

    /**
     * @return NetworkGateway
     */
    public function getNetworkGateway()
    {
      return $this->NetworkGateway;
    }

    /**
     * @param NetworkGateway $NetworkGateway
     * @return \app\modules\dvr\components\onvif\wsdl\GetNetworkDefaultGatewayResponse
     */
    public function setNetworkGateway($NetworkGateway)
    {
      $this->NetworkGateway = $NetworkGateway;
      return $this;
    }

}
