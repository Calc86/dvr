<?php

namespace app\modules\dvr\components\onvif\wsdl;

class RealTimeStreamingCapabilities
{

    /**
     * @var boolean $RTPMulticast
     */
    protected $RTPMulticast = null;

    /**
     * @var boolean $RTP_TCP
     */
    protected $RTP_TCP = null;

    /**
     * @var boolean $RTP_RTSP_TCP
     */
    protected $RTP_RTSP_TCP = null;

    /**
     * @var RealTimeStreamingCapabilitiesExtension $Extension
     */
    protected $Extension = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getRTPMulticast()
    {
      return $this->RTPMulticast;
    }

    /**
     * @param boolean $RTPMulticast
     * @return \app\modules\dvr\components\onvif\wsdl\RealTimeStreamingCapabilities
     */
    public function setRTPMulticast($RTPMulticast)
    {
      $this->RTPMulticast = $RTPMulticast;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRTP_TCP()
    {
      return $this->RTP_TCP;
    }

    /**
     * @param boolean $RTP_TCP
     * @return \app\modules\dvr\components\onvif\wsdl\RealTimeStreamingCapabilities
     */
    public function setRTP_TCP($RTP_TCP)
    {
      $this->RTP_TCP = $RTP_TCP;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRTP_RTSP_TCP()
    {
      return $this->RTP_RTSP_TCP;
    }

    /**
     * @param boolean $RTP_RTSP_TCP
     * @return \app\modules\dvr\components\onvif\wsdl\RealTimeStreamingCapabilities
     */
    public function setRTP_RTSP_TCP($RTP_RTSP_TCP)
    {
      $this->RTP_RTSP_TCP = $RTP_RTSP_TCP;
      return $this;
    }

    /**
     * @return RealTimeStreamingCapabilitiesExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param RealTimeStreamingCapabilitiesExtension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\RealTimeStreamingCapabilities
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
