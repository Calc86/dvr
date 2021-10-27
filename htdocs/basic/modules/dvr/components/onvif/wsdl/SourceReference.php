<?php

namespace app\modules\dvr\components\onvif\wsdl;

class SourceReference
{

    /**
     * @var ReferenceToken $Token
     */
    protected $Token = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var anyURI $Type
     */
    protected $Type = null;

    /**
     * @param ReferenceToken $Token
     * @param string $any
     * @param anyURI $Type
     */
    public function __construct($Token, $any, $Type)
    {
      $this->Token = $Token;
      $this->any = $any;
      $this->Type = $Type;
    }

    /**
     * @return ReferenceToken
     */
    public function getToken()
    {
      return $this->Token;
    }

    /**
     * @param ReferenceToken $Token
     * @return \app\modules\dvr\components\onvif\wsdl\SourceReference
     */
    public function setToken($Token)
    {
      $this->Token = $Token;
      return $this;
    }

    /**
     * @return string
     */
    public function getAny()
    {
      return $this->any;
    }

    /**
     * @param string $any
     * @return \app\modules\dvr\components\onvif\wsdl\SourceReference
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anyURI $Type
     * @return \app\modules\dvr\components\onvif\wsdl\SourceReference
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
