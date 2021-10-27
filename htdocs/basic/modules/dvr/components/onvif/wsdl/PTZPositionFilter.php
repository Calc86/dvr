<?php

namespace app\modules\dvr\components\onvif\wsdl;

class PTZPositionFilter
{

    /**
     * @var PTZVector $MinPosition
     */
    protected $MinPosition = null;

    /**
     * @var PTZVector $MaxPosition
     */
    protected $MaxPosition = null;

    /**
     * @var boolean $EnterOrExit
     */
    protected $EnterOrExit = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param PTZVector $MinPosition
     * @param PTZVector $MaxPosition
     * @param boolean $EnterOrExit
     * @param string $any
     */
    public function __construct($MinPosition, $MaxPosition, $EnterOrExit, $any)
    {
      $this->MinPosition = $MinPosition;
      $this->MaxPosition = $MaxPosition;
      $this->EnterOrExit = $EnterOrExit;
      $this->any = $any;
    }

    /**
     * @return PTZVector
     */
    public function getMinPosition()
    {
      return $this->MinPosition;
    }

    /**
     * @param PTZVector $MinPosition
     * @return \app\modules\dvr\components\onvif\wsdl\PTZPositionFilter
     */
    public function setMinPosition($MinPosition)
    {
      $this->MinPosition = $MinPosition;
      return $this;
    }

    /**
     * @return PTZVector
     */
    public function getMaxPosition()
    {
      return $this->MaxPosition;
    }

    /**
     * @param PTZVector $MaxPosition
     * @return \app\modules\dvr\components\onvif\wsdl\PTZPositionFilter
     */
    public function setMaxPosition($MaxPosition)
    {
      $this->MaxPosition = $MaxPosition;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnterOrExit()
    {
      return $this->EnterOrExit;
    }

    /**
     * @param boolean $EnterOrExit
     * @return \app\modules\dvr\components\onvif\wsdl\PTZPositionFilter
     */
    public function setEnterOrExit($EnterOrExit)
    {
      $this->EnterOrExit = $EnterOrExit;
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
     * @return \app\modules\dvr\components\onvif\wsdl\PTZPositionFilter
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
