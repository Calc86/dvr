<?php

namespace app\modules\dvr\components\onvif\wsdl;

class GetWsdlUrlResponse
{

    /**
     * @var anyURI $WsdlUrl
     */
    protected $WsdlUrl = null;

    /**
     * @param anyURI $WsdlUrl
     */
    public function __construct($WsdlUrl)
    {
      $this->WsdlUrl = $WsdlUrl;
    }

    /**
     * @return anyURI
     */
    public function getWsdlUrl()
    {
      return $this->WsdlUrl;
    }

    /**
     * @param anyURI $WsdlUrl
     * @return \app\modules\dvr\components\onvif\wsdl\GetWsdlUrlResponse
     */
    public function setWsdlUrl($WsdlUrl)
    {
      $this->WsdlUrl = $WsdlUrl;
      return $this;
    }

}
