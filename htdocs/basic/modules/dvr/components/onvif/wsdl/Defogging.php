<?php

namespace app\modules\dvr\components\onvif\wsdl;

class Defogging
{

    /**
     * @var string $Mode
     */
    protected $Mode = null;

    /**
     * @var float $Level
     */
    protected $Level = null;

    /**
     * @var DefoggingExtension $Extension
     */
    protected $Extension = null;

    /**
     * @param string $Mode
     */
    public function __construct($Mode)
    {
      $this->Mode = $Mode;
    }

    /**
     * @return string
     */
    public function getMode()
    {
      return $this->Mode;
    }

    /**
     * @param string $Mode
     * @return \app\modules\dvr\components\onvif\wsdl\Defogging
     */
    public function setMode($Mode)
    {
      $this->Mode = $Mode;
      return $this;
    }

    /**
     * @return float
     */
    public function getLevel()
    {
      return $this->Level;
    }

    /**
     * @param float $Level
     * @return \app\modules\dvr\components\onvif\wsdl\Defogging
     */
    public function setLevel($Level)
    {
      $this->Level = $Level;
      return $this;
    }

    /**
     * @return DefoggingExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param DefoggingExtension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\Defogging
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
