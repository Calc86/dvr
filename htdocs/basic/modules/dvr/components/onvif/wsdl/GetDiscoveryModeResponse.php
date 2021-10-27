<?php

namespace app\modules\dvr\components\onvif\wsdl;

class GetDiscoveryModeResponse
{

    /**
     * @var DiscoveryMode $DiscoveryMode
     */
    protected $DiscoveryMode = null;

    /**
     * @param DiscoveryMode $DiscoveryMode
     */
    public function __construct($DiscoveryMode)
    {
      $this->DiscoveryMode = $DiscoveryMode;
    }

    /**
     * @return DiscoveryMode
     */
    public function getDiscoveryMode()
    {
      return $this->DiscoveryMode;
    }

    /**
     * @param DiscoveryMode $DiscoveryMode
     * @return \app\modules\dvr\components\onvif\wsdl\GetDiscoveryModeResponse
     */
    public function setDiscoveryMode($DiscoveryMode)
    {
      $this->DiscoveryMode = $DiscoveryMode;
      return $this;
    }

}
