<?php

namespace app\modules\dvr\components\onvif\wsdl;

class GetServicesResponse
{

    /**
     * @var Service $Service
     */
    protected $Service = null;

    /**
     * @param Service $Service
     */
    public function __construct($Service)
    {
      $this->Service = $Service;
    }

    /**
     * @return Service
     */
    public function getService()
    {
      return $this->Service;
    }

    /**
     * @param Service $Service
     * @return \app\modules\dvr\components\onvif\wsdl\GetServicesResponse
     */
    public function setService($Service)
    {
      $this->Service = $Service;
      return $this;
    }

}
