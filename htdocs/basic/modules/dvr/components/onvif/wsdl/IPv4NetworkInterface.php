<?php

namespace app\modules\dvr\components\onvif\wsdl;

class IPv4NetworkInterface
{

    /**
     * @var boolean $Enabled
     */
    protected $Enabled = null;

    /**
     * @var IPv4Configuration $Config
     */
    protected $Config = null;

    /**
     * @param boolean $Enabled
     * @param IPv4Configuration $Config
     */
    public function __construct($Enabled, $Config)
    {
      $this->Enabled = $Enabled;
      $this->Config = $Config;
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
     * @return \app\modules\dvr\components\onvif\wsdl\IPv4NetworkInterface
     */
    public function setEnabled($Enabled)
    {
      $this->Enabled = $Enabled;
      return $this;
    }

    /**
     * @return IPv4Configuration
     */
    public function getConfig()
    {
      return $this->Config;
    }

    /**
     * @param IPv4Configuration $Config
     * @return \app\modules\dvr\components\onvif\wsdl\IPv4NetworkInterface
     */
    public function setConfig($Config)
    {
      $this->Config = $Config;
      return $this;
    }

}
