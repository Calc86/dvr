<?php

namespace app\modules\dvr\components\onvif\wsdl;

class SupportedRules
{

    /**
     * @var anyURI[] $RuleContentSchemaLocation
     */
    protected $RuleContentSchemaLocation = null;

    /**
     * @var ConfigDescription[] $RuleDescription
     */
    protected $RuleDescription = null;

    /**
     * @var SupportedRulesExtension $Extension
     */
    protected $Extension = null;

    /**
     * @var int $Limit
     */
    protected $Limit = null;

    /**
     * @param int $Limit
     */
    public function __construct($Limit)
    {
      $this->Limit = $Limit;
    }

    /**
     * @return anyURI[]
     */
    public function getRuleContentSchemaLocation()
    {
      return $this->RuleContentSchemaLocation;
    }

    /**
     * @param anyURI[] $RuleContentSchemaLocation
     * @return \app\modules\dvr\components\onvif\wsdl\SupportedRules
     */
    public function setRuleContentSchemaLocation(array $RuleContentSchemaLocation = null)
    {
      $this->RuleContentSchemaLocation = $RuleContentSchemaLocation;
      return $this;
    }

    /**
     * @return ConfigDescription[]
     */
    public function getRuleDescription()
    {
      return $this->RuleDescription;
    }

    /**
     * @param ConfigDescription[] $RuleDescription
     * @return \app\modules\dvr\components\onvif\wsdl\SupportedRules
     */
    public function setRuleDescription(array $RuleDescription = null)
    {
      $this->RuleDescription = $RuleDescription;
      return $this;
    }

    /**
     * @return SupportedRulesExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param SupportedRulesExtension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\SupportedRules
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

    /**
     * @return int
     */
    public function getLimit()
    {
      return $this->Limit;
    }

    /**
     * @param int $Limit
     * @return \app\modules\dvr\components\onvif\wsdl\SupportedRules
     */
    public function setLimit($Limit)
    {
      $this->Limit = $Limit;
      return $this;
    }

}
