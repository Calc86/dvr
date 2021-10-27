<?php

namespace app\modules\dvr\components\onvif\wsdl;

class GeoOrientation
{

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var float $roll
     */
    protected $roll = null;

    /**
     * @var float $pitch
     */
    protected $pitch = null;

    /**
     * @var float $yaw
     */
    protected $yaw = null;

    /**
     * @param string $any
     * @param float $roll
     * @param float $pitch
     * @param float $yaw
     */
    public function __construct($any, $roll, $pitch, $yaw)
    {
      $this->any = $any;
      $this->roll = $roll;
      $this->pitch = $pitch;
      $this->yaw = $yaw;
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
     * @return \app\modules\dvr\components\onvif\wsdl\GeoOrientation
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return float
     */
    public function getRoll()
    {
      return $this->roll;
    }

    /**
     * @param float $roll
     * @return \app\modules\dvr\components\onvif\wsdl\GeoOrientation
     */
    public function setRoll($roll)
    {
      $this->roll = $roll;
      return $this;
    }

    /**
     * @return float
     */
    public function getPitch()
    {
      return $this->pitch;
    }

    /**
     * @param float $pitch
     * @return \app\modules\dvr\components\onvif\wsdl\GeoOrientation
     */
    public function setPitch($pitch)
    {
      $this->pitch = $pitch;
      return $this;
    }

    /**
     * @return float
     */
    public function getYaw()
    {
      return $this->yaw;
    }

    /**
     * @param float $yaw
     * @return \app\modules\dvr\components\onvif\wsdl\GeoOrientation
     */
    public function setYaw($yaw)
    {
      $this->yaw = $yaw;
      return $this;
    }

}
