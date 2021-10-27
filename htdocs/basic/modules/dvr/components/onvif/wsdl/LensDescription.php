<?php

namespace app\modules\dvr\components\onvif\wsdl;

class LensDescription
{

    /**
     * @var LensOffset $Offset
     */
    protected $Offset = null;

    /**
     * @var LensProjection[] $Projection
     */
    protected $Projection = null;

    /**
     * @var float $XFactor
     */
    protected $XFactor = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var float $FocalLength
     */
    protected $FocalLength = null;

    /**
     * @param LensOffset $Offset
     * @param LensProjection[] $Projection
     * @param float $XFactor
     * @param string $any
     * @param float $FocalLength
     */
    public function __construct($Offset, array $Projection, $XFactor, $any, $FocalLength)
    {
      $this->Offset = $Offset;
      $this->Projection = $Projection;
      $this->XFactor = $XFactor;
      $this->any = $any;
      $this->FocalLength = $FocalLength;
    }

    /**
     * @return LensOffset
     */
    public function getOffset()
    {
      return $this->Offset;
    }

    /**
     * @param LensOffset $Offset
     * @return \app\modules\dvr\components\onvif\wsdl\LensDescription
     */
    public function setOffset($Offset)
    {
      $this->Offset = $Offset;
      return $this;
    }

    /**
     * @return LensProjection[]
     */
    public function getProjection()
    {
      return $this->Projection;
    }

    /**
     * @param LensProjection[] $Projection
     * @return \app\modules\dvr\components\onvif\wsdl\LensDescription
     */
    public function setProjection(array $Projection)
    {
      $this->Projection = $Projection;
      return $this;
    }

    /**
     * @return float
     */
    public function getXFactor()
    {
      return $this->XFactor;
    }

    /**
     * @param float $XFactor
     * @return \app\modules\dvr\components\onvif\wsdl\LensDescription
     */
    public function setXFactor($XFactor)
    {
      $this->XFactor = $XFactor;
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
     * @return \app\modules\dvr\components\onvif\wsdl\LensDescription
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return float
     */
    public function getFocalLength()
    {
      return $this->FocalLength;
    }

    /**
     * @param float $FocalLength
     * @return \app\modules\dvr\components\onvif\wsdl\LensDescription
     */
    public function setFocalLength($FocalLength)
    {
      $this->FocalLength = $FocalLength;
      return $this;
    }

}
