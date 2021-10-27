<?php

namespace app\modules\dvr\components\onvif\wsdl;

class FocusStatus20
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
     * @var FocusStatus20Extension $Extension
     */
    protected $Extension = null;

    /**
     * @param float $Position
     * @param MoveStatus $MoveStatus
     */
    public function __construct($Position, $MoveStatus)
    {
      $this->Position = $Position;
      $this->MoveStatus = $MoveStatus;
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
     * @return \app\modules\dvr\components\onvif\wsdl\FocusStatus20
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
     * @return \app\modules\dvr\components\onvif\wsdl\FocusStatus20
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
     * @return \app\modules\dvr\components\onvif\wsdl\FocusStatus20
     */
    public function setError($Error)
    {
      $this->Error = $Error;
      return $this;
    }

    /**
     * @return FocusStatus20Extension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param FocusStatus20Extension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\FocusStatus20
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
