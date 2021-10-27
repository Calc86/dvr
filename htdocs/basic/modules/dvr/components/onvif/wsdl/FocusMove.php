<?php

namespace app\modules\dvr\components\onvif\wsdl;

class FocusMove
{

    /**
     * @var AbsoluteFocus $Absolute
     */
    protected $Absolute = null;

    /**
     * @var RelativeFocus $Relative
     */
    protected $Relative = null;

    /**
     * @var ContinuousFocus $Continuous
     */
    protected $Continuous = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AbsoluteFocus
     */
    public function getAbsolute()
    {
      return $this->Absolute;
    }

    /**
     * @param AbsoluteFocus $Absolute
     * @return \app\modules\dvr\components\onvif\wsdl\FocusMove
     */
    public function setAbsolute($Absolute)
    {
      $this->Absolute = $Absolute;
      return $this;
    }

    /**
     * @return RelativeFocus
     */
    public function getRelative()
    {
      return $this->Relative;
    }

    /**
     * @param RelativeFocus $Relative
     * @return \app\modules\dvr\components\onvif\wsdl\FocusMove
     */
    public function setRelative($Relative)
    {
      $this->Relative = $Relative;
      return $this;
    }

    /**
     * @return ContinuousFocus
     */
    public function getContinuous()
    {
      return $this->Continuous;
    }

    /**
     * @param ContinuousFocus $Continuous
     * @return \app\modules\dvr\components\onvif\wsdl\FocusMove
     */
    public function setContinuous($Continuous)
    {
      $this->Continuous = $Continuous;
      return $this;
    }

}
