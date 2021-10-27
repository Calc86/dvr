<?php

namespace app\modules\dvr\components\onvif\wsdl;

class Scope
{

    /**
     * @var ScopeDefinition $ScopeDef
     */
    protected $ScopeDef = null;

    /**
     * @var anyURI $ScopeItem
     */
    protected $ScopeItem = null;

    /**
     * @param ScopeDefinition $ScopeDef
     * @param anyURI $ScopeItem
     */
    public function __construct($ScopeDef, $ScopeItem)
    {
      $this->ScopeDef = $ScopeDef;
      $this->ScopeItem = $ScopeItem;
    }

    /**
     * @return ScopeDefinition
     */
    public function getScopeDef()
    {
      return $this->ScopeDef;
    }

    /**
     * @param ScopeDefinition $ScopeDef
     * @return \app\modules\dvr\components\onvif\wsdl\Scope
     */
    public function setScopeDef($ScopeDef)
    {
      $this->ScopeDef = $ScopeDef;
      return $this;
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
     * @return \app\modules\dvr\components\onvif\wsdl\Scope
     */
    public function setScopeItem($ScopeItem)
    {
      $this->ScopeItem = $ScopeItem;
      return $this;
    }

}
