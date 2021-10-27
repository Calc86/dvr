<?php

namespace app\modules\dvr\components\onvif\wsdl;

class SetHostnameFromDHCP
{

    /**
     * @var boolean $FromDHCP
     */
    protected $FromDHCP = null;

    /**
     * @param boolean $FromDHCP
     */
    public function __construct($FromDHCP)
    {
      $this->FromDHCP = $FromDHCP;
    }

    /**
     * @return boolean
     */
    public function getFromDHCP()
    {
      return $this->FromDHCP;
    }

    /**
     * @param boolean $FromDHCP
     * @return \app\modules\dvr\components\onvif\wsdl\SetHostnameFromDHCP
     */
    public function setFromDHCP($FromDHCP)
    {
      $this->FromDHCP = $FromDHCP;
      return $this;
    }

}
