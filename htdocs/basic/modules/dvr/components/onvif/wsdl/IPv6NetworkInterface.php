<?php

namespace app\modules\dvr\components\onvif\wsdl;

class IPv6NetworkInterface
{

    /**
     * @var boolean $Enabled
     */
    protected $Enabled = null;

    /**
     * @var IPv6Configuration $Config
     */
    protected $Config = null;

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
     * @return \app\modules\dvr\components\onvif\wsdl\IPv6NetworkInterface
     */
    public function setEnabled($Enabled)
    {
      $this->Enabled = $Enabled;
      return $this;
    }

    /**
     * @return IPv6Configuration
     */
    public function getConfig()
    {
      return $this->Config;
    }

    /**
     * @param IPv6Configuration $Config
     * @return \app\modules\dvr\components\onvif\wsdl\IPv6NetworkInterface
     */
    public function setConfig($Config)
    {
      $this->Config = $Config;
      return $this;
    }

}
