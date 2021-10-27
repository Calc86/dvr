<?php

namespace app\modules\dvr\components\onvif\wsdl;

class ColorspaceRange
{

    /**
     * @var FloatRange $X
     */
    protected $X = null;

    /**
     * @var FloatRange $Y
     */
    protected $Y = null;

    /**
     * @var FloatRange $Z
     */
    protected $Z = null;

    /**
     * @var anyURI $Colorspace
     */
    protected $Colorspace = null;

    /**
     * @param FloatRange $X
     * @param FloatRange $Y
     * @param FloatRange $Z
     * @param anyURI $Colorspace
     */
    public function __construct($X, $Y, $Z, $Colorspace)
    {
      $this->X = $X;
      $this->Y = $Y;
      $this->Z = $Z;
      $this->Colorspace = $Colorspace;
    }

    /**
     * @return FloatRange
     */
    public function getX()
    {
      return $this->X;
    }

    /**
     * @param FloatRange $X
     * @return \app\modules\dvr\components\onvif\wsdl\ColorspaceRange
     */
    public function setX($X)
    {
      $this->X = $X;
      return $this;
    }

    /**
     * @return FloatRange
     */
    public function getY()
    {
      return $this->Y;
    }

    /**
     * @param FloatRange $Y
     * @return \app\modules\dvr\components\onvif\wsdl\ColorspaceRange
     */
    public function setY($Y)
    {
      $this->Y = $Y;
      return $this;
    }

    /**
     * @return FloatRange
     */
    public function getZ()
    {
      return $this->Z;
    }

    /**
     * @param FloatRange $Z
     * @return \app\modules\dvr\components\onvif\wsdl\ColorspaceRange
     */
    public function setZ($Z)
    {
      $this->Z = $Z;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getColorspace()
    {
      return $this->Colorspace;
    }

    /**
     * @param anyURI $Colorspace
     * @return \app\modules\dvr\components\onvif\wsdl\ColorspaceRange
     */
    public function setColorspace($Colorspace)
    {
      $this->Colorspace = $Colorspace;
      return $this;
    }

}
