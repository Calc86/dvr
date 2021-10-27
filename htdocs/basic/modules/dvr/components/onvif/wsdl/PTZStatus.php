<?php

namespace app\modules\dvr\components\onvif\wsdl;

class PTZStatus
{

    /**
     * @var PTZVector $Position
     */
    protected $Position = null;

    /**
     * @var PTZMoveStatus $MoveStatus
     */
    protected $MoveStatus = null;

    /**
     * @var string $Error
     */
    protected $Error = null;

    /**
     * @var \DateTime $UtcTime
     */
    protected $UtcTime = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param \DateTime $UtcTime
     * @param string $any
     */
    public function __construct(\DateTime $UtcTime, $any)
    {
      $this->UtcTime = $UtcTime->format(\DateTime::ATOM);
      $this->any = $any;
    }

    /**
     * @return PTZVector
     */
    public function getPosition()
    {
      return $this->Position;
    }

    /**
     * @param PTZVector $Position
     * @return \app\modules\dvr\components\onvif\wsdl\PTZStatus
     */
    public function setPosition($Position)
    {
      $this->Position = $Position;
      return $this;
    }

    /**
     * @return PTZMoveStatus
     */
    public function getMoveStatus()
    {
      return $this->MoveStatus;
    }

    /**
     * @param PTZMoveStatus $MoveStatus
     * @return \app\modules\dvr\components\onvif\wsdl\PTZStatus
     */
    public function setMoveStatus($MoveStatus)
    {
      $this->MoveStatus = $MoveStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getError()
    {
      return $this->Error;
    }

    /**
     * @param string $Error
     * @return \app\modules\dvr\components\onvif\wsdl\PTZStatus
     */
    public function setError($Error)
    {
      $this->Error = $Error;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUtcTime()
    {
      if ($this->UtcTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->UtcTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $UtcTime
     * @return \app\modules\dvr\components\onvif\wsdl\PTZStatus
     */
    public function setUtcTime(\DateTime $UtcTime)
    {
      $this->UtcTime = $UtcTime->format(\DateTime::ATOM);
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
     * @return \app\modules\dvr\components\onvif\wsdl\PTZStatus
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
