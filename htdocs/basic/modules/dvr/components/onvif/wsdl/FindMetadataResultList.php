<?php

namespace app\modules\dvr\components\onvif\wsdl;

class FindMetadataResultList
{

    /**
     * @var SearchState $SearchState
     */
    protected $SearchState = null;

    /**
     * @var FindMetadataResult[] $Result
     */
    protected $Result = null;

    /**
     * @param SearchState $SearchState
     */
    public function __construct($SearchState)
    {
      $this->SearchState = $SearchState;
    }

    /**
     * @return SearchState
     */
    public function getSearchState()
    {
      return $this->SearchState;
    }

    /**
     * @param SearchState $SearchState
     * @return \app\modules\dvr\components\onvif\wsdl\FindMetadataResultList
     */
    public function setSearchState($SearchState)
    {
      $this->SearchState = $SearchState;
      return $this;
    }

    /**
     * @return FindMetadataResult[]
     */
    public function getResult()
    {
      return $this->Result;
    }

    /**
     * @param FindMetadataResult[] $Result
     * @return \app\modules\dvr\components\onvif\wsdl\FindMetadataResultList
     */
    public function setResult(array $Result = null)
    {
      $this->Result = $Result;
      return $this;
    }

}
