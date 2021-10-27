<?php

namespace app\modules\dvr\components\onvif\wsdl;

class EFlipOptions
{

    /**
     * @var EFlipMode[] $Mode
     */
    protected $Mode = null;

    /**
     * @var EFlipOptionsExtension $Extension
     */
    protected $Extension = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return EFlipMode[]
     */
    public function getMode()
    {
      return $this->Mode;
    }

    /**
     * @param EFlipMode[] $Mode
     * @return \app\modules\dvr\components\onvif\wsdl\EFlipOptions
     */
    public function setMode(array $Mode = null)
    {
      $this->Mode = $Mode;
      return $this;
    }

    /**
     * @return EFlipOptionsExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param EFlipOptionsExtension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\EFlipOptions
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
