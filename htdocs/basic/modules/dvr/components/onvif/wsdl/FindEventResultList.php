<?php

namespace app\modules\dvr\components\onvif\wsdl;

class FindEventResultList
{

    /**
     * @var SearchState $SearchState
     */
    protected $SearchState = null;

    /**
     * @var FindEventResult[] $Result
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
     * @return \app\modules\dvr\components\onvif\wsdl\FindEventResultList
     */
    public function setSearchState($SearchState)
    {
      $this->SearchState = $SearchState;
      return $this;
    }

    /**
     * @return FindEventResult[]
     */
    public function getResult()
    {
      return $this->Result;
    }

    /**
     * @param FindEventResult[] $Result
     * @return \app\modules\dvr\components\onvif\wsdl\FindEventResultList
     */
    public function setResult(array $Result = null)
    {
      $this->Result = $Result;
      return $this;
    }

}
