<?php

namespace app\modules\dvr\components\onvif\wsdl;

class Polyline
{

    /**
     * @var Vector[] $Point
     */
    protected $Point = null;

    /**
     * @param Vector[] $Point
     */
    public function __construct(array $Point)
    {
      $this->Point = $Point;
    }

    /**
     * @return Vector[]
     */
    public function getPoint()
    {
      return $this->Point;
    }

    /**
     * @param Vector[] $Point
     * @return \app\modules\dvr\components\onvif\wsdl\Polyline
     */
    public function setPoint(array $Point)
    {
      $this->Point = $Point;
      return $this;
    }

}
