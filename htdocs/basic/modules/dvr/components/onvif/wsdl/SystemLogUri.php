<?php

namespace app\modules\dvr\components\onvif\wsdl;

class SystemLogUri
{

    /**
     * @var SystemLogType $Type
     */
    protected $Type = null;

    /**
     * @var anyURI $Uri
     */
    protected $Uri = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param SystemLogType $Type
     * @param anyURI $Uri
     * @param string $any
     */
    public function __construct($Type, $Uri, $any)
    {
      $this->Type = $Type;
      $this->Uri = $Uri;
      $this->any = $any;
    }

    /**
     * @return SystemLogType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param SystemLogType $Type
     * @return \app\modules\dvr\components\onvif\wsdl\SystemLogUri
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getUri()
    {
      return $this->Uri;
    }

    /**
     * @param anyURI $Uri
     * @return \app\modules\dvr\components\onvif\wsdl\SystemLogUri
     */
    public function setUri($Uri)
    {
      $this->Uri = $Uri;
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
     * @return \app\modules\dvr\components\onvif\wsdl\SystemLogUri
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
