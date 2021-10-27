<?php

namespace app\modules\dvr\components\onvif\wsdl;

class IncludeCustom
{

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var anyURI $href
     */
    protected $href = null;

    /**
     * @param string $any
     * @param anyURI $href
     */
    public function __construct($any, $href)
    {
      $this->any = $any;
      $this->href = $href;
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
     * @return \app\modules\dvr\components\onvif\wsdl\Include
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getHref()
    {
      return $this->href;
    }

    /**
     * @param anyURI $href
     * @return \app\modules\dvr\components\onvif\wsdl\Include
     */
    public function setHref($href)
    {
      $this->href = $href;
      return $this;
    }

}
