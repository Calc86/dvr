<?php

namespace app\modules\dvr\components\onvif\wsdl;

class MoveOptions
{

    /**
     * @var AbsoluteFocusOptions $Absolute
     */
    protected $Absolute = null;

    /**
     * @var RelativeFocusOptions $Relative
     */
    protected $Relative = null;

    /**
     * @var ContinuousFocusOptions $Continuous
     */
    protected $Continuous = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AbsoluteFocusOptions
     */
    public function getAbsolute()
    {
      return $this->Absolute;
    }

    /**
     * @param AbsoluteFocusOptions $Absolute
     * @return \app\modules\dvr\components\onvif\wsdl\MoveOptions
     */
    public function setAbsolute($Absolute)
    {
      $this->Absolute = $Absolute;
      return $this;
    }

    /**
     * @return RelativeFocusOptions
     */
    public function getRelative()
    {
      return $this->Relative;
    }

    /**
     * @param RelativeFocusOptions $Relative
     * @return \app\modules\dvr\components\onvif\wsdl\MoveOptions
     */
    public function setRelative($Relative)
    {
      $this->Relative = $Relative;
      return $this;
    }

    /**
     * @return ContinuousFocusOptions
     */
    public function getContinuous()
    {
      return $this->Continuous;
    }

    /**
     * @param ContinuousFocusOptions $Continuous
     * @return \app\modules\dvr\components\onvif\wsdl\MoveOptions
     */
    public function setContinuous($Continuous)
    {
      $this->Continuous = $Continuous;
      return $this;
    }

}
