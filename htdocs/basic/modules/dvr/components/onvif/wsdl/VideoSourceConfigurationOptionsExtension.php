<?php

namespace app\modules\dvr\components\onvif\wsdl;

class VideoSourceConfigurationOptionsExtension
{

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var RotateOptions $Rotate
     */
    protected $Rotate = null;

    /**
     * @var VideoSourceConfigurationOptionsExtension2 $Extension
     */
    protected $Extension = null;

    /**
     * @param string $any
     */
    public function __construct($any)
    {
      $this->any = $any;
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
     * @return \app\modules\dvr\components\onvif\wsdl\VideoSourceConfigurationOptionsExtension
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return RotateOptions
     */
    public function getRotate()
    {
      return $this->Rotate;
    }

    /**
     * @param RotateOptions $Rotate
     * @return \app\modules\dvr\components\onvif\wsdl\VideoSourceConfigurationOptionsExtension
     */
    public function setRotate($Rotate)
    {
      $this->Rotate = $Rotate;
      return $this;
    }

    /**
     * @return VideoSourceConfigurationOptionsExtension2
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param VideoSourceConfigurationOptionsExtension2 $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\VideoSourceConfigurationOptionsExtension
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
