<?php

namespace app\modules\dvr\components\onvif\wsdl;

class Transformation
{

    /**
     * @var Vector $Translate
     */
    protected $Translate = null;

    /**
     * @var Vector $Scale
     */
    protected $Scale = null;

    /**
     * @var TransformationExtension $Extension
     */
    protected $Extension = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Vector
     */
    public function getTranslate()
    {
      return $this->Translate;
    }

    /**
     * @param Vector $Translate
     * @return \app\modules\dvr\components\onvif\wsdl\Transformation
     */
    public function setTranslate($Translate)
    {
      $this->Translate = $Translate;
      return $this;
    }

    /**
     * @return Vector
     */
    public function getScale()
    {
      return $this->Scale;
    }

    /**
     * @param Vector $Scale
     * @return \app\modules\dvr\components\onvif\wsdl\Transformation
     */
    public function setScale($Scale)
    {
      $this->Scale = $Scale;
      return $this;
    }

    /**
     * @return TransformationExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param TransformationExtension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\Transformation
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
