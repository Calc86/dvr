<?php

namespace app\modules\dvr\components\onvif\wsdl;

class SupportedAnalyticsModules
{

    /**
     * @var anyURI[] $AnalyticsModuleContentSchemaLocation
     */
    protected $AnalyticsModuleContentSchemaLocation = null;

    /**
     * @var ConfigDescription[] $AnalyticsModuleDescription
     */
    protected $AnalyticsModuleDescription = null;

    /**
     * @var SupportedAnalyticsModulesExtension $Extension
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
    public function getAnalyticsModuleContentSchemaLocation()
    {
      return $this->AnalyticsModuleContentSchemaLocation;
    }

    /**
     * @param anyURI[] $AnalyticsModuleContentSchemaLocation
     * @return \app\modules\dvr\components\onvif\wsdl\SupportedAnalyticsModules
     */
    public function setAnalyticsModuleContentSchemaLocation(array $AnalyticsModuleContentSchemaLocation = null)
    {
      $this->AnalyticsModuleContentSchemaLocation = $AnalyticsModuleContentSchemaLocation;
      return $this;
    }

    /**
     * @return ConfigDescription[]
     */
    public function getAnalyticsModuleDescription()
    {
      return $this->AnalyticsModuleDescription;
    }

    /**
     * @param ConfigDescription[] $AnalyticsModuleDescription
     * @return \app\modules\dvr\components\onvif\wsdl\SupportedAnalyticsModules
     */
    public function setAnalyticsModuleDescription(array $AnalyticsModuleDescription = null)
    {
      $this->AnalyticsModuleDescription = $AnalyticsModuleDescription;
      return $this;
    }

    /**
     * @return SupportedAnalyticsModulesExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param SupportedAnalyticsModulesExtension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\SupportedAnalyticsModules
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
     * @return \app\modules\dvr\components\onvif\wsdl\SupportedAnalyticsModules
     */
    public function setLimit($Limit)
    {
      $this->Limit = $Limit;
      return $this;
    }

}
