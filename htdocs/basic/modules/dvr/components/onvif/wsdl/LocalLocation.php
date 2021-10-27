<?php

namespace app\modules\dvr\components\onvif\wsdl;

class LocalLocation
{

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var float $x
     */
    protected $x = null;

    /**
     * @var float $y
     */
    protected $y = null;

    /**
     * @var float $z
     */
    protected $z = null;

    /**
     * @param string $any
     * @param float $x
     * @param float $y
     * @param float $z
     */
    public function __construct($any, $x, $y, $z)
    {
      $this->any = $any;
      $this->x = $x;
      $this->y = $y;
      $this->z = $z;
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
     * @return \app\modules\dvr\components\onvif\wsdl\LocalLocation
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return float
     */
    public function getX()
    {
      return $this->x;
    }

    /**
     * @param float $x
     * @return \app\modules\dvr\components\onvif\wsdl\LocalLocation
     */
    public function setX($x)
    {
      $this->x = $x;
      return $this;
    }

    /**
     * @return float
     */
    public function getY()
    {
      return $this->y;
    }

    /**
     * @param float $y
     * @return \app\modules\dvr\components\onvif\wsdl\LocalLocation
     */
    public function setY($y)
    {
      $this->y = $y;
      return $this;
    }

    /**
     * @return float
     */
    public function getZ()
    {
      return $this->z;
    }

    /**
     * @param float $z
     * @return \app\modules\dvr\components\onvif\wsdl\LocalLocation
     */
    public function setZ($z)
    {
      $this->z = $z;
      return $this;
    }

}
