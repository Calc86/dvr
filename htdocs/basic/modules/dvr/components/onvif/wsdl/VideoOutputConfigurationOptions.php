<?php

namespace app\modules\dvr\components\onvif\wsdl;

class VideoOutputConfigurationOptions
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
     * @return \app\modules\dvr\components\onvif\wsdl\VideoOutputConfigurationOptions
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
