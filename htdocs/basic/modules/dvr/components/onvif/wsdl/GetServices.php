<?php

namespace app\modules\dvr\components\onvif\wsdl;

class GetServices
{

    /**
     * @var boolean $IncludeCapability
     */
    protected $IncludeCapability = null;

    /**
     * @param boolean $IncludeCapability
     */
    public function __construct($IncludeCapability)
    {
      $this->IncludeCapability = $IncludeCapability;
    }

    /**
     * @return boolean
     */
    public function getIncludeCapability()
    {
      return $this->IncludeCapability;
    }

    /**
     * @param boolean $IncludeCapability
     * @return \app\modules\dvr\components\onvif\wsdl\GetServices
     */
    public function setIncludeCapability($IncludeCapability)
    {
      $this->IncludeCapability = $IncludeCapability;
      return $this;
    }

}
