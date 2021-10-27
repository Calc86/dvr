<?php

namespace app\modules\dvr\components\onvif\wsdl;

class SetRemoteDiscoveryMode
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
     * @return \app\modules\dvr\components\onvif\wsdl\SetRemoteDiscoveryMode
     */
    public function setRemoteDiscoveryMode($RemoteDiscoveryMode)
    {
      $this->RemoteDiscoveryMode = $RemoteDiscoveryMode;
      return $this;
    }

}
