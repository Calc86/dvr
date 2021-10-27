<?php

namespace app\modules\dvr\components\onvif\wsdl;

class IntRectangle
{

    /**
     * @var int $x
     */
    protected $x = null;

    /**
     * @var int $y
     */
    protected $y = null;

    /**
     * @var int $width
     */
    protected $width = null;

    /**
     * @var int $height
     */
    protected $height = null;

    /**
     * @param int $x
     * @param int $y
     * @param int $width
     * @param int $height
     */
    public function __construct($x, $y, $width, $height)
    {
      $this->x = $x;
      $this->y = $y;
      $this->width = $width;
      $this->height = $height;
    }

    /**
     * @return int
     */
    public function getX()
    {
      return $this->x;
    }

    /**
     * @param int $x
     * @return \app\modules\dvr\components\onvif\wsdl\IntRectangle
     */
    public function setX($x)
    {
      $this->x = $x;
      return $this;
    }

    /**
     * @return int
     */
    public function getY()
    {
      return $this->y;
    }

    /**
     * @param int $y
     * @return \app\modules\dvr\components\onvif\wsdl\IntRectangle
     */
    public function setY($y)
    {
      $this->y = $y;
      return $this;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
      return $this->width;
    }

    /**
     * @param int $width
     * @return \app\modules\dvr\components\onvif\wsdl\IntRectangle
     */
    public function setWidth($width)
    {
      $this->width = $width;
      return $this;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
      return $this->height;
    }

    /**
     * @param int $height
     * @return \app\modules\dvr\components\onvif\wsdl\IntRectangle
     */
    public function setHeight($height)
    {
      $this->height = $height;
      return $this;
    }

}
