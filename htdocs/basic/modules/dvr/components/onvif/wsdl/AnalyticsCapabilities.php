<?php

namespace app\modules\dvr\components\onvif\wsdl;

class AnalyticsCapabilities
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
     * @var boolean $AnalyticsModuleSupport
     */
    protected $AnalyticsModuleSupport = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param anyURI $XAddr
     * @param boolean $RuleSupport
     * @param boolean $AnalyticsModuleSupport
     * @param string $any
     */
    public function __construct($XAddr, $RuleSupport, $AnalyticsModuleSupport, $any)
    {
      $this->XAddr = $XAddr;
      $this->RuleSupport = $RuleSupport;
      $this->AnalyticsModuleSupport = $AnalyticsModuleSupport;
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
     * @return \app\modules\dvr\components\onvif\wsdl\AnalyticsCapabilities
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
     * @return \app\modules\dvr\components\onvif\wsdl\AnalyticsCapabilities
     */
    public function setRuleSupport($RuleSupport)
    {
      $this->RuleSupport = $RuleSupport;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAnalyticsModuleSupport()
    {
      return $this->AnalyticsModuleSupport;
    }

    /**
     * @param boolean $AnalyticsModuleSupport
     * @return \app\modules\dvr\components\onvif\wsdl\AnalyticsCapabilities
     */
    public function setAnalyticsModuleSupport($AnalyticsModuleSupport)
    {
      $this->AnalyticsModuleSupport = $AnalyticsModuleSupport;
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
     * @return \app\modules\dvr\components\onvif\wsdl\AnalyticsCapabilities
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
