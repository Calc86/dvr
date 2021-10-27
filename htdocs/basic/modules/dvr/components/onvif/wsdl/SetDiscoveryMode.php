<?php

namespace app\modules\dvr\components\onvif\wsdl;

class SetDiscoveryMode
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
     * @return \app\modules\dvr\components\onvif\wsdl\SetDiscoveryMode
     */
    public function setDiscoveryMode($DiscoveryMode)
    {
      $this->DiscoveryMode = $DiscoveryMode;
      return $this;
    }

}
