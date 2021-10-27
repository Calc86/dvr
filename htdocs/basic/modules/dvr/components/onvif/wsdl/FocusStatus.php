<?php

namespace app\modules\dvr\components\onvif\wsdl;

class FocusStatus
{

    /**
     * @var float $Position
     */
    protected $Position = null;

    /**
     * @var MoveStatus $MoveStatus
     */
    protected $MoveStatus = null;

    /**
     * @var string $Error
     */
    protected $Error = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param float $Position
     * @param MoveStatus $MoveStatus
     * @param string $Error
     * @param string $any
     */
    public function __construct($Position, $MoveStatus, $Error, $any)
    {
      $this->Position = $Position;
      $this->MoveStatus = $MoveStatus;
      $this->Error = $Error;
      $this->any = $any;
    }

    /**
     * @return float
     */
    public function getPosition()
    {
      return $this->Position;
    }

    /**
     * @param float $Position
     * @return \app\modules\dvr\components\onvif\wsdl\FocusStatus
     */
    public function setPosition($Position)
    {
      $this->Position = $Position;
      return $this;
    }

    /**
     * @return MoveStatus
     */
    public function getMoveStatus()
    {
      return $this->MoveStatus;
    }

    /**
     * @param MoveStatus $MoveStatus
     * @return \app\modules\dvr\components\onvif\wsdl\FocusStatus
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
     * @return \app\modules\dvr\components\onvif\wsdl\FocusStatus
     */
    public function setError($Error)
    {
      $this->Error = $Error;
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
     * @return \app\modules\dvr\components\onvif\wsdl\FocusStatus
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
