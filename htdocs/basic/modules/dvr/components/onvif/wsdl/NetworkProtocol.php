<?php

namespace app\modules\dvr\components\onvif\wsdl;

class NetworkProtocol
{

    /**
     * @var NetworkProtocolType $Name
     */
    protected $Name = null;

    /**
     * @var boolean $Enabled
     */
    protected $Enabled = null;

    /**
     * @var int[] $Port
     */
    protected $Port = null;

    /**
     * @var NetworkProtocolExtension $Extension
     */
    protected $Extension = null;

    /**
     * @param NetworkProtocolType $Name
     * @param boolean $Enabled
     * @param int[] $Port
     */
    public function __construct($Name, $Enabled, array $Port)
    {
      $this->Name = $Name;
      $this->Enabled = $Enabled;
      $this->Port = $Port;
    }

    /**
     * @return NetworkProtocolType
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param NetworkProtocolType $Name
     * @return \app\modules\dvr\components\onvif\wsdl\NetworkProtocol
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
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
     * @return \app\modules\dvr\components\onvif\wsdl\NetworkProtocol
     */
    public function setEnabled($Enabled)
    {
      $this->Enabled = $Enabled;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getPort()
    {
      return $this->Port;
    }

    /**
     * @param int[] $Port
     * @return \app\modules\dvr\components\onvif\wsdl\NetworkProtocol
     */
    public function setPort(array $Port)
    {
      $this->Port = $Port;
      return $this;
    }

    /**
     * @return NetworkProtocolExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param NetworkProtocolExtension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\NetworkProtocol
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
