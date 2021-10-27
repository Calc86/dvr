<?php

namespace app\modules\dvr\components\onvif\wsdl;

class RemoveScopesResponse
{

    /**
     * @var anyURI $ScopeItem
     */
    protected $ScopeItem = null;

    /**
     * @param anyURI $ScopeItem
     */
    public function __construct($ScopeItem)
    {
      $this->ScopeItem = $ScopeItem;
    }

    /**
     * @return anyURI
     */
    public function getScopeItem()
    {
      return $this->ScopeItem;
    }

    /**
     * @param anyURI $ScopeItem
     * @return \app\modules\dvr\components\onvif\wsdl\RemoveScopesResponse
     */
    public function setScopeItem($ScopeItem)
    {
      $this->ScopeItem = $ScopeItem;
      return $this;
    }

}
