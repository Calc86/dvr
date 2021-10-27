<?php

namespace app\modules\dvr\components\onvif\wsdl;

class PTZConfigurationOptions
{

    /**
     * @var PTZSpaces $Spaces
     */
    protected $Spaces = null;

    /**
     * @var DurationRange $PTZTimeout
     */
    protected $PTZTimeout = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var PTControlDirectionOptions $PTControlDirection
     */
    protected $PTControlDirection = null;

    /**
     * @var PTZConfigurationOptions2 $Extension
     */
    protected $Extension = null;

    /**
     * @var IntList $PTZRamps
     */
    protected $PTZRamps = null;

    /**
     * @param PTZSpaces $Spaces
     * @param DurationRange $PTZTimeout
     * @param string $any
     * @param IntList $PTZRamps
     */
    public function __construct($Spaces, $PTZTimeout, $any, $PTZRamps)
    {
      $this->Spaces = $Spaces;
      $this->PTZTimeout = $PTZTimeout;
      $this->any = $any;
      $this->PTZRamps = $PTZRamps;
    }

    /**
     * @return PTZSpaces
     */
    public function getSpaces()
    {
      return $this->Spaces;
    }

    /**
     * @param PTZSpaces $Spaces
     * @return \app\modules\dvr\components\onvif\wsdl\PTZConfigurationOptions
     */
    public function setSpaces($Spaces)
    {
      $this->Spaces = $Spaces;
      return $this;
    }

    /**
     * @return DurationRange
     */
    public function getPTZTimeout()
    {
      return $this->PTZTimeout;
    }

    /**
     * @param DurationRange $PTZTimeout
     * @return \app\modules\dvr\components\onvif\wsdl\PTZConfigurationOptions
     */
    public function setPTZTimeout($PTZTimeout)
    {
      $this->PTZTimeout = $PTZTimeout;
      return $this;
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
     * @return \app\modules\dvr\components\onvif\wsdl\PTZConfigurationOptions
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return PTControlDirectionOptions
     */
    public function getPTControlDirection()
    {
      return $this->PTControlDirection;
    }

    /**
     * @param PTControlDirectionOptions $PTControlDirection
     * @return \app\modules\dvr\components\onvif\wsdl\PTZConfigurationOptions
     */
    public function setPTControlDirection($PTControlDirection)
    {
      $this->PTControlDirection = $PTControlDirection;
      return $this;
    }

    /**
     * @return PTZConfigurationOptions2
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param PTZConfigurationOptions2 $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\PTZConfigurationOptions
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

    /**
     * @return IntList
     */
    public function getPTZRamps()
    {
      return $this->PTZRamps;
    }

    /**
     * @param IntList $PTZRamps
     * @return \app\modules\dvr\components\onvif\wsdl\PTZConfigurationOptions
     */
    public function setPTZRamps($PTZRamps)
    {
      $this->PTZRamps = $PTZRamps;
      return $this;
    }

}
