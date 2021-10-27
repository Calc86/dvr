<?php

namespace app\modules\dvr\components\onvif\wsdl;

class GetClientCertificateModeResponse
{

    /**
     * @var boolean $Enabled
     */
    protected $Enabled = null;

    /**
     * @param boolean $Enabled
     */
    public function __construct($Enabled)
    {
      $this->Enabled = $Enabled;
    }

    /**
     * @return boolean
     */
    public function getEnabled()
    {
      return $this->Enabled;
    }

    /**
     * @param boolean $Enabled
     * @return \app\modules\dvr\components\onvif\wsdl\GetClientCertificateModeResponse
     */
    public function setEnabled($Enabled)
    {
      $this->Enabled = $Enabled;
      return $this;
    }

}
