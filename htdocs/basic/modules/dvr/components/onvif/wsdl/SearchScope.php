<?php

namespace app\modules\dvr\components\onvif\wsdl;

class SearchScope
{

    /**
     * @var SourceReference[] $IncludedSources
     */
    protected $IncludedSources = null;

    /**
     * @var RecordingReference[] $IncludedRecordings
     */
    protected $IncludedRecordings = null;

    /**
     * @var XPathExpression $RecordingInformationFilter
     */
    protected $RecordingInformationFilter = null;

    /**
     * @var SearchScopeExtension $Extension
     */
    protected $Extension = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SourceReference[]
     */
    public function getIncludedSources()
    {
      return $this->IncludedSources;
    }

    /**
     * @param SourceReference[] $IncludedSources
     * @return \app\modules\dvr\components\onvif\wsdl\SearchScope
     */
    public function setIncludedSources(array $IncludedSources = null)
    {
      $this->IncludedSources = $IncludedSources;
      return $this;
    }

    /**
     * @return RecordingReference[]
     */
    public function getIncludedRecordings()
    {
      return $this->IncludedRecordings;
    }

    /**
     * @param RecordingReference[] $IncludedRecordings
     * @return \app\modules\dvr\components\onvif\wsdl\SearchScope
     */
    public function setIncludedRecordings(array $IncludedRecordings = null)
    {
      $this->IncludedRecordings = $IncludedRecordings;
      return $this;
    }

    /**
     * @return XPathExpression
     */
    public function getRecordingInformationFilter()
    {
      return $this->RecordingInformationFilter;
    }

    /**
     * @param XPathExpression $RecordingInformationFilter
     * @return \app\modules\dvr\components\onvif\wsdl\SearchScope
     */
    public function setRecordingInformationFilter($RecordingInformationFilter)
    {
      $this->RecordingInformationFilter = $RecordingInformationFilter;
      return $this;
    }

    /**
     * @return SearchScopeExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param SearchScopeExtension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\SearchScope
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
