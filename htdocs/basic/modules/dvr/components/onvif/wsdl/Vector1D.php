<?php

namespace app\modules\dvr\components\onvif\wsdl;

class Vector1D
{

    /**
     * @var float $x
     */
    protected $x = null;

    /**
     * @var anyURI $space
     */
    protected $space = null;

    /**
     * @param float $x
     * @param anyURI $space
     */
    public function __construct($x, $space)
    {
      $this->x = $x;
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
     * @return \app\modules\dvr\components\onvif\wsdl\Vector1D
     */
    public function setX($x)
    {
      $this->x = $x;
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
     * @return \app\modules\dvr\components\onvif\wsdl\Vector1D
     */
    public function setSpace($space)
    {
      $this->space = $space;
      return $this;
    }

}
