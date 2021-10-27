<?php

namespace app\modules\dvr\components\onvif\wsdl;

class Reverse
{

    /**
     * @var ReverseMode $Mode
     */
    protected $Mode = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param ReverseMode $Mode
     * @param string $any
     */
    public function __construct($Mode, $any)
    {
      $this->Mode = $Mode;
      $this->any = $any;
    }

    /**
     * @return ReverseMode
     */
    public function getMode()
    {
      return $this->Mode;
    }

    /**
     * @param ReverseMode $Mode
     * @return \app\modules\dvr\components\onvif\wsdl\Reverse
     */
    public function setMode($Mode)
    {
      $this->Mode = $Mode;
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
     * @return \app\modules\dvr\components\onvif\wsdl\Reverse
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
