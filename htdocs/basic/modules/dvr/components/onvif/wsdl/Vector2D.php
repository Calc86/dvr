<?php

namespace app\modules\dvr\components\onvif\wsdl;

class Vector2D
{

    /**
     * @var float $x
     */
    protected $x = null;

    /**
     * @var float $y
     */
    protected $y = null;

    /**
     * @var anyURI $space
     */
    protected $space = null;

    /**
     * @param float $x
     * @param float $y
     * @param anyURI $space
     */
    public function __construct($x, $y, $space)
    {
      $this->x = $x;
      $this->y = $y;
      $this->space = $space;
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
     * @return \app\modules\dvr\components\onvif\wsdl\Vector2D
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
     * @return \app\modules\dvr\components\onvif\wsdl\Vector2D
     */
    public function setY($y)
    {
      $this->y = $y;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getSpace()
    {
      return $this->space;
    }

    /**
     * @param anyURI $space
     * @return \app\modules\dvr\components\onvif\wsdl\Vector2D
     */
    public function setSpace($space)
    {
      $this->space = $space;
      return $this;
    }

}
