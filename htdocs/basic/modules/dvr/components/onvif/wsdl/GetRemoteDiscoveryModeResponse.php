<?php

namespace app\modules\dvr\components\onvif\wsdl;

class GetRemoteDiscoveryModeResponse
{

    /**
     * @var DiscoveryMode $RemoteDiscoveryMode
     */
    protected $RemoteDiscoveryMode = null;

    /**
     * @param DiscoveryMode $RemoteDiscoveryMode
     */
    public function __construct($RemoteDiscoveryMode)
    {
      $this->RemoteDiscoveryMode = $RemoteDiscoveryMode;
    }

    /**
     * @return DiscoveryMode
     */
    public function getRemoteDiscoveryMode()
    {
      return $this->RemoteDiscoveryMode;
    }

    /**
     * @param DiscoveryMode $RemoteDiscoveryMode
     * @return \app\modules\dvr\components\onvif\wsdl\GetRemoteDiscoveryModeResponse
     */
    public function setRemoteDiscoveryMode($RemoteDiscoveryMode)
    {
      $this->RemoteDiscoveryMode = $RemoteDiscoveryMode;
      return $this;
    }

}
