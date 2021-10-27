<?php

namespace app\modules\dvr\components\onvif\wsdl;

class ReceiverCapabilities
{

    /**
     * @var anyURI $XAddr
     */
    protected $XAddr = null;

    /**
     * @var boolean $RTP_Multicast
     */
    protected $RTP_Multicast = null;

    /**
     * @var boolean $RTP_TCP
     */
    protected $RTP_TCP = null;

    /**
     * @var boolean $RTP_RTSP_TCP
     */
    protected $RTP_RTSP_TCP = null;

    /**
     * @var int $SupportedReceivers
     */
    protected $SupportedReceivers = null;

    /**
     * @var int $MaximumRTSPURILength
     */
    protected $MaximumRTSPURILength = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param anyURI $XAddr
     * @param boolean $RTP_Multicast
     * @param boolean $RTP_TCP
     * @param boolean $RTP_RTSP_TCP
     * @param int $SupportedReceivers
     * @param int $MaximumRTSPURILength
     * @param string $any
     */
    public function __construct($XAddr, $RTP_Multicast, $RTP_TCP, $RTP_RTSP_TCP, $SupportedReceivers, $MaximumRTSPURILength, $any)
    {
      $this->XAddr = $XAddr;
      $this->RTP_Multicast = $RTP_Multicast;
      $this->RTP_TCP = $RTP_TCP;
      $this->RTP_RTSP_TCP = $RTP_RTSP_TCP;
      $this->SupportedReceivers = $SupportedReceivers;
      $this->MaximumRTSPURILength = $MaximumRTSPURILength;
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
     * @return \app\modules\dvr\components\onvif\wsdl\ReceiverCapabilities
     */
    public function setXAddr($XAddr)
    {
      $this->XAddr = $XAddr;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRTP_Multicast()
    {
      return $this->RTP_Multicast;
    }

    /**
     * @param boolean $RTP_Multicast
     * @return \app\modules\dvr\components\onvif\wsdl\ReceiverCapabilities
     */
    public function setRTP_Multicast($RTP_Multicast)
    {
      $this->RTP_Multicast = $RTP_Multicast;
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
     * @return \app\modules\dvr\components\onvif\wsdl\ReceiverCapabilities
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
     * @return \app\modules\dvr\components\onvif\wsdl\ReceiverCapabilities
     */
    public function setRTP_RTSP_TCP($RTP_RTSP_TCP)
    {
      $this->RTP_RTSP_TCP = $RTP_RTSP_TCP;
      return $this;
    }

    /**
     * @return int
     */
    public function getSupportedReceivers()
    {
      return $this->SupportedReceivers;
    }

    /**
     * @param int $SupportedReceivers
     * @return \app\modules\dvr\components\onvif\wsdl\ReceiverCapabilities
     */
    public function setSupportedReceivers($SupportedReceivers)
    {
      $this->SupportedReceivers = $SupportedReceivers;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaximumRTSPURILength()
    {
      return $this->MaximumRTSPURILength;
    }

    /**
     * @param int $MaximumRTSPURILength
     * @return \app\modules\dvr\components\onvif\wsdl\ReceiverCapabilities
     */
    public function setMaximumRTSPURILength($MaximumRTSPURILength)
    {
      $this->MaximumRTSPURILength = $MaximumRTSPURILength;
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
     * @return \app\modules\dvr\components\onvif\wsdl\ReceiverCapabilities
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
