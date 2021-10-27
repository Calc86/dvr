<?php

namespace app\modules\dvr\components\onvif\wsdl;

class EventCapabilities
{

    /**
     * @var anyURI $XAddr
     */
    protected $XAddr = null;

    /**
     * @var boolean $WSSubscriptionPolicySupport
     */
    protected $WSSubscriptionPolicySupport = null;

    /**
     * @var boolean $WSPullPointSupport
     */
    protected $WSPullPointSupport = null;

    /**
     * @var boolean $WSPausableSubscriptionManagerInterfaceSupport
     */
    protected $WSPausableSubscriptionManagerInterfaceSupport = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param anyURI $XAddr
     * @param boolean $WSSubscriptionPolicySupport
     * @param boolean $WSPullPointSupport
     * @param boolean $WSPausableSubscriptionManagerInterfaceSupport
     * @param string $any
     */
    public function __construct($XAddr, $WSSubscriptionPolicySupport, $WSPullPointSupport, $WSPausableSubscriptionManagerInterfaceSupport, $any)
    {
      $this->XAddr = $XAddr;
      $this->WSSubscriptionPolicySupport = $WSSubscriptionPolicySupport;
      $this->WSPullPointSupport = $WSPullPointSupport;
      $this->WSPausableSubscriptionManagerInterfaceSupport = $WSPausableSubscriptionManagerInterfaceSupport;
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
     * @return \app\modules\dvr\components\onvif\wsdl\EventCapabilities
     */
    public function setXAddr($XAddr)
    {
      $this->XAddr = $XAddr;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getWSSubscriptionPolicySupport()
    {
      return $this->WSSubscriptionPolicySupport;
    }

    /**
     * @param boolean $WSSubscriptionPolicySupport
     * @return \app\modules\dvr\components\onvif\wsdl\EventCapabilities
     */
    public function setWSSubscriptionPolicySupport($WSSubscriptionPolicySupport)
    {
      $this->WSSubscriptionPolicySupport = $WSSubscriptionPolicySupport;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getWSPullPointSupport()
    {
      return $this->WSPullPointSupport;
    }

    /**
     * @param boolean $WSPullPointSupport
     * @return \app\modules\dvr\components\onvif\wsdl\EventCapabilities
     */
    public function setWSPullPointSupport($WSPullPointSupport)
    {
      $this->WSPullPointSupport = $WSPullPointSupport;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getWSPausableSubscriptionManagerInterfaceSupport()
    {
      return $this->WSPausableSubscriptionManagerInterfaceSupport;
    }

    /**
     * @param boolean $WSPausableSubscriptionManagerInterfaceSupport
     * @return \app\modules\dvr\components\onvif\wsdl\EventCapabilities
     */
    public function setWSPausableSubscriptionManagerInterfaceSupport($WSPausableSubscriptionManagerInterfaceSupport)
    {
      $this->WSPausableSubscriptionManagerInterfaceSupport = $WSPausableSubscriptionManagerInterfaceSupport;
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
     * @return \app\modules\dvr\components\onvif\wsdl\EventCapabilities
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
