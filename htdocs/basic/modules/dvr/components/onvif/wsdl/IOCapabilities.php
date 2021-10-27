<?php

namespace app\modules\dvr\components\onvif\wsdl;

class IOCapabilities
{

    /**
     * @var int $InputConnectors
     */
    protected $InputConnectors = null;

    /**
     * @var int $RelayOutputs
     */
    protected $RelayOutputs = null;

    /**
     * @var IOCapabilitiesExtension $Extension
     */
    protected $Extension = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getInputConnectors()
    {
      return $this->InputConnectors;
    }

    /**
     * @param int $InputConnectors
     * @return \app\modules\dvr\components\onvif\wsdl\IOCapabilities
     */
    public function setInputConnectors($InputConnectors)
    {
      $this->InputConnectors = $InputConnectors;
      return $this;
    }

    /**
     * @return int
     */
    public function getRelayOutputs()
    {
      return $this->RelayOutputs;
    }

    /**
     * @param int $RelayOutputs
     * @return \app\modules\dvr\components\onvif\wsdl\IOCapabilities
     */
    public function setRelayOutputs($RelayOutputs)
    {
      $this->RelayOutputs = $RelayOutputs;
      return $this;
    }

    /**
     * @return IOCapabilitiesExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param IOCapabilitiesExtension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\IOCapabilities
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
