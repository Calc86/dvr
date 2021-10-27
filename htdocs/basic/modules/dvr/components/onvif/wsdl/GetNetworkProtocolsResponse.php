<?php

namespace app\modules\dvr\components\onvif\wsdl;

class GetNetworkProtocolsResponse
{

    /**
     * @var NetworkProtocol $NetworkProtocols
     */
    protected $NetworkProtocols = null;

    /**
     * @param NetworkProtocol $NetworkProtocols
     */
    public function __construct($NetworkProtocols)
    {
      $this->NetworkProtocols = $NetworkProtocols;
    }

    /**
     * @return NetworkProtocol
     */
    public function getNetworkProtocols()
    {
      return $this->NetworkProtocols;
    }

    /**
     * @param NetworkProtocol $NetworkProtocols
     * @return \app\modules\dvr\components\onvif\wsdl\GetNetworkProtocolsResponse
     */
    public function setNetworkProtocols($NetworkProtocols)
    {
      $this->NetworkProtocols = $NetworkProtocols;
      return $this;
    }

}
