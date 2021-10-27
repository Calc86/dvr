<?php

namespace app\modules\dvr\components\onvif\wsdl;

class GetEndpointReferenceResponse
{

    /**
     * @var string $GUID
     */
    protected $GUID = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $GUID
     * @param string $any
     */
    public function __construct($GUID, $any)
    {
      $this->GUID = $GUID;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getGUID()
    {
      return $this->GUID;
    }

    /**
     * @param string $GUID
     * @return \app\modules\dvr\components\onvif\wsdl\GetEndpointReferenceResponse
     */
    public function setGUID($GUID)
    {
      $this->GUID = $GUID;
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
     * @return \app\modules\dvr\components\onvif\wsdl\GetEndpointReferenceResponse
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
