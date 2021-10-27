<?php

namespace app\modules\dvr\components\onvif\wsdl;

class MediaCapabilities
{

    /**
     * @var anyURI $XAddr
     */
    protected $XAddr = null;

    /**
     * @var RealTimeStreamingCapabilities $StreamingCapabilities
     */
    protected $StreamingCapabilities = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var MediaCapabilitiesExtension $Extension
     */
    protected $Extension = null;

    /**
     * @param anyURI $XAddr
     * @param RealTimeStreamingCapabilities $StreamingCapabilities
     * @param string $any
     */
    public function __construct($XAddr, $StreamingCapabilities, $any)
    {
      $this->XAddr = $XAddr;
      $this->StreamingCapabilities = $StreamingCapabilities;
      $this->any = $any;
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
     * @return \app\modules\dvr\components\onvif\wsdl\MediaCapabilities
     */
    public function setXAddr($XAddr)
    {
      $this->XAddr = $XAddr;
      return $this;
    }

    /**
     * @return RealTimeStreamingCapabilities
     */
    public function getStreamingCapabilities()
    {
      return $this->StreamingCapabilities;
    }

    /**
     * @param RealTimeStreamingCapabilities $StreamingCapabilities
     * @return \app\modules\dvr\components\onvif\wsdl\MediaCapabilities
     */
    public function setStreamingCapabilities($StreamingCapabilities)
    {
      $this->StreamingCapabilities = $StreamingCapabilities;
      return $this;
    }

    /**
     * @return string
     */
    public function getAny()
    {
      return $this->any;
    }

    /**
     * @param string $any
     * @return \app\modules\dvr\components\onvif\wsdl\MediaCapabilities
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return MediaCapabilitiesExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param MediaCapabilitiesExtension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\MediaCapabilities
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
