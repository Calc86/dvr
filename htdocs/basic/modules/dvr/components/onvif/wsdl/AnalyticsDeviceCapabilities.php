<?php

namespace app\modules\dvr\components\onvif\wsdl;

class AnalyticsDeviceCapabilities
{

    /**
     * @var anyURI $XAddr
     */
    protected $XAddr = null;

    /**
     * @var boolean $RuleSupport
     */
    protected $RuleSupport = null;

    /**
     * @var AnalyticsDeviceExtension $Extension
     */
    protected $Extension = null;

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
     * @return \app\modules\dvr\components\onvif\wsdl\AnalyticsDeviceCapabilities
     */
    public function setXAddr($XAddr)
    {
      $this->XAddr = $XAddr;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRuleSupport()
    {
      return $this->RuleSupport;
    }

    /**
     * @param boolean $RuleSupport
     * @return \app\modules\dvr\components\onvif\wsdl\AnalyticsDeviceCapabilities
     */
    public function setRuleSupport($RuleSupport)
    {
      $this->RuleSupport = $RuleSupport;
      return $this;
    }

    /**
     * @return AnalyticsDeviceExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param AnalyticsDeviceExtension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\AnalyticsDeviceCapabilities
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
