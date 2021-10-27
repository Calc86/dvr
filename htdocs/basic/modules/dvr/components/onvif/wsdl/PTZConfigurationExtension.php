<?php

namespace app\modules\dvr\components\onvif\wsdl;

class PTZConfigurationExtension
{

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var PTControlDirection $PTControlDirection
     */
    protected $PTControlDirection = null;

    /**
     * @var PTZConfigurationExtension2 $Extension
     */
    protected $Extension = null;

    /**
     * @param string $any
     */
    public function __construct($any)
    {
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getAny()
    {
      return $this->any;
    }

    /**
     * @param string $any
     * @return \app\modules\dvr\components\onvif\wsdl\PTZConfigurationExtension
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return PTControlDirection
     */
    public function getPTControlDirection()
    {
      return $this->PTControlDirection;
    }

    /**
     * @param PTControlDirection $PTControlDirection
     * @return \app\modules\dvr\components\onvif\wsdl\PTZConfigurationExtension
     */
    public function setPTControlDirection($PTControlDirection)
    {
      $this->PTControlDirection = $PTControlDirection;
      return $this;
    }

    /**
     * @return PTZConfigurationExtension2
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param PTZConfigurationExtension2 $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\PTZConfigurationExtension
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
