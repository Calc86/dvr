<?php

namespace app\modules\dvr\components\onvif\wsdl;

class FocusOptions20Extension
{

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var StringAttrList $AFModes
     */
    protected $AFModes = null;

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
     * @return \app\modules\dvr\components\onvif\wsdl\FocusOptions20Extension
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return StringAttrList
     */
    public function getAFModes()
    {
      return $this->AFModes;
    }

    /**
     * @param StringAttrList $AFModes
     * @return \app\modules\dvr\components\onvif\wsdl\FocusOptions20Extension
     */
    public function setAFModes($AFModes)
    {
      $this->AFModes = $AFModes;
      return $this;
    }

}
