<?php

namespace app\modules\dvr\components\onvif\wsdl;

class Rotate
{

    /**
     * @var RotateMode $Mode
     */
    protected $Mode = null;

    /**
     * @var int $Degree
     */
    protected $Degree = null;

    /**
     * @var RotateExtension $Extension
     */
    protected $Extension = null;

    /**
     * @param RotateMode $Mode
     */
    public function __construct($Mode)
    {
      $this->Mode = $Mode;
    }

    /**
     * @return RotateMode
     */
    public function getMode()
    {
      return $this->Mode;
    }

    /**
     * @param RotateMode $Mode
     * @return \app\modules\dvr\components\onvif\wsdl\Rotate
     */
    public function setMode($Mode)
    {
      $this->Mode = $Mode;
      return $this;
    }

    /**
     * @return int
     */
    public function getDegree()
    {
      return $this->Degree;
    }

    /**
     * @param int $Degree
     * @return \app\modules\dvr\components\onvif\wsdl\Rotate
     */
    public function setDegree($Degree)
    {
      $this->Degree = $Degree;
      return $this;
    }

    /**
     * @return RotateExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param RotateExtension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\Rotate
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
