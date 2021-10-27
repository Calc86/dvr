<?php

namespace app\modules\dvr\components\onvif\wsdl;

class PolygonOptions
{

    /**
     * @var boolean $RectangleOnly
     */
    protected $RectangleOnly = null;

    /**
     * @var IntRange $VertexLimits
     */
    protected $VertexLimits = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $any
     */
    public function __construct($any)
    {
      $this->any = $any;
    }

    /**
     * @return boolean
     */
    public function getRectangleOnly()
    {
      return $this->RectangleOnly;
    }

    /**
     * @param boolean $RectangleOnly
     * @return \app\modules\dvr\components\onvif\wsdl\PolygonOptions
     */
    public function setRectangleOnly($RectangleOnly)
    {
      $this->RectangleOnly = $RectangleOnly;
      return $this;
    }

    /**
     * @return IntRange
     */
    public function getVertexLimits()
    {
      return $this->VertexLimits;
    }

    /**
     * @param IntRange $VertexLimits
     * @return \app\modules\dvr\components\onvif\wsdl\PolygonOptions
     */
    public function setVertexLimits($VertexLimits)
    {
      $this->VertexLimits = $VertexLimits;
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
     * @return \app\modules\dvr\components\onvif\wsdl\PolygonOptions
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
