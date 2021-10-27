<?php

namespace app\modules\dvr\components\onvif\wsdl;

class SetScopes
{

    /**
     * @var anyURI $Scopes
     */
    protected $Scopes = null;

    /**
     * @param anyURI $Scopes
     */
    public function __construct($Scopes)
    {
      $this->Scopes = $Scopes;
    }

    /**
     * @return anyURI
     */
    public function getScopes()
    {
      return $this->Scopes;
    }

    /**
     * @param anyURI $Scopes
     * @return \app\modules\dvr\components\onvif\wsdl\SetScopes
     */
    public function setScopes($Scopes)
    {
      $this->Scopes = $Scopes;
      return $this;
    }

}
