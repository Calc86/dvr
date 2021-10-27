<?php

namespace app\modules\dvr\components\onvif\wsdl;

class PTZFilter
{

    /**
     * @var boolean $Status
     */
    protected $Status = null;

    /**
     * @var boolean $Position
     */
    protected $Position = null;

    /**
     * @param boolean $Status
     * @param boolean $Position
     */
    public function __construct($Status, $Position)
    {
      $this->Status = $Status;
      $this->Position = $Position;
    }

    /**
     * @return boolean
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param boolean $Status
     * @return \app\modules\dvr\components\onvif\wsdl\PTZFilter
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPosition()
    {
      return $this->Position;
    }

    /**
     * @param boolean $Position
     * @return \app\modules\dvr\components\onvif\wsdl\PTZFilter
     */
    public function setPosition($Position)
    {
      $this->Position = $Position;
      return $this;
    }

}
