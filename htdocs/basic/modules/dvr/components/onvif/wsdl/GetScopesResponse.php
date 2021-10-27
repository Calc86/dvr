<?php

namespace app\modules\dvr\components\onvif\wsdl;

class GetScopesResponse
{

    /**
     * @var Scope $Scopes
     */
    protected $Scopes = null;

    /**
     * @param Scope $Scopes
     */
    public function __construct($Scopes)
    {
      $this->Scopes = $Scopes;
    }

    /**
     * @return Scope
     */
    public function getScopes()
    {
      return $this->Scopes;
    }

    /**
     * @param Scope $Scopes
     * @return \app\modules\dvr\components\onvif\wsdl\GetScopesResponse
     */
    public function setScopes($Scopes)
    {
      $this->Scopes = $Scopes;
      return $this;
    }

}
