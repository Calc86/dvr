<?php

namespace app\modules\dvr\components\onvif\wsdl;

class GetDot11StatusResponse
{

    /**
     * @var Dot11Status $Status
     */
    protected $Status = null;

    /**
     * @param Dot11Status $Status
     */
    public function __construct($Status)
    {
      $this->Status = $Status;
    }

    /**
     * @return Dot11Status
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param Dot11Status $Status
     * @return \app\modules\dvr\components\onvif\wsdl\GetDot11StatusResponse
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}
