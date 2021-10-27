<?php

namespace app\modules\dvr\components\onvif\wsdl;

class ImagingCapabilities
{

    /**
     * @var anyURI $XAddr
     */
    protected $XAddr = null;

    /**
     * @param anyURI $XAddr
     */
    public function __construct($XAddr)
    {
      $this->XAddr = $XAddr;
    }

    /**
     * @return anyURI
     */
    public function getXAddr()
    {
      return $this->XAddr;
    }

    /**
     * @param anyURI $XAddr
     * @return \app\modules\dvr\components\onvif\wsdl\ImagingCapabilities
     */
    public function setXAddr($XAddr)
    {
      $this->XAddr = $XAddr;
      return $this;
    }

}
