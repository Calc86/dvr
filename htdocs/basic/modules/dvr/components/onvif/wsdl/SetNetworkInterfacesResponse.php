<?php

namespace app\modules\dvr\components\onvif\wsdl;

class SetNetworkInterfacesResponse
{

    /**
     * @var boolean $RebootNeeded
     */
    protected $RebootNeeded = null;

    /**
     * @param boolean $RebootNeeded
     */
    public function __construct($RebootNeeded)
    {
      $this->RebootNeeded = $RebootNeeded;
    }

    /**
     * @return boolean
     */
    public function getRebootNeeded()
    {
      return $this->RebootNeeded;
    }

    /**
     * @param boolean $RebootNeeded
     * @return \app\modules\dvr\components\onvif\wsdl\SetNetworkInterfacesResponse
     */
    public function setRebootNeeded($RebootNeeded)
    {
      $this->RebootNeeded = $RebootNeeded;
      return $this;
    }

}
