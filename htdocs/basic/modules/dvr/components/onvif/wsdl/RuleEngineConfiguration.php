<?php

namespace app\modules\dvr\components\onvif\wsdl;

class RuleEngineConfiguration
{

    /**
     * @var Config[] $Rule
     */
    protected $Rule = null;

    /**
     * @var RuleEngineConfigurationExtension $Extension
     */
    protected $Extension = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Config[]
     */
    public function getRule()
    {
      return $this->Rule;
    }

    /**
     * @param Config[] $Rule
     * @return \app\modules\dvr\components\onvif\wsdl\RuleEngineConfiguration
     */
    public function setRule(array $Rule = null)
    {
      $this->Rule = $Rule;
      return $this;
    }

    /**
     * @return RuleEngineConfigurationExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param RuleEngineConfigurationExtension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\RuleEngineConfiguration
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
