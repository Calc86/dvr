<?php

namespace app\modules\dvr\components\onvif\wsdl;

class PTZPresetTourStatusExtension
{

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
     * @return string
     */
    public function getAny()
    {
      return $this->any;
    }

    /**
     * @param string $any
     * @return \app\modules\dvr\components\onvif\wsdl\PTZPresetTourStatusExtension
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
