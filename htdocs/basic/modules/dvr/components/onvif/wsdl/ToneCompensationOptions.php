<?php

namespace app\modules\dvr\components\onvif\wsdl;

class ToneCompensationOptions
{

    /**
     * @var string[] $Mode
     */
    protected $Mode = null;

    /**
     * @var boolean $Level
     */
    protected $Level = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string[] $Mode
     * @param boolean $Level
     * @param string $any
     */
    public function __construct(array $Mode, $Level, $any)
    {
      $this->Mode = $Mode;
      $this->Level = $Level;
      $this->any = $any;
    }

    /**
     * @return string[]
     */
    public function getMode()
    {
      return $this->Mode;
    }

    /**
     * @param string[] $Mode
     * @return \app\modules\dvr\components\onvif\wsdl\ToneCompensationOptions
     */
    public function setMode(array $Mode)
    {
      $this->Mode = $Mode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLevel()
    {
      return $this->Level;
    }

    /**
     * @param boolean $Level
     * @return \app\modules\dvr\components\onvif\wsdl\ToneCompensationOptions
     */
    public function setLevel($Level)
    {
      $this->Level = $Level;
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
     * @return \app\modules\dvr\components\onvif\wsdl\ToneCompensationOptions
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
