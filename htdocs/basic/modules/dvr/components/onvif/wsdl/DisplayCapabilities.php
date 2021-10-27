<?php

namespace app\modules\dvr\components\onvif\wsdl;

class DisplayCapabilities
{

    /**
     * @var anyURI $XAddr
     */
    protected $XAddr = null;

    /**
     * @var boolean $FixedLayout
     */
    protected $FixedLayout = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param anyURI $XAddr
     * @param boolean $FixedLayout
     * @param string $any
     */
    public function __construct($XAddr, $FixedLayout, $any)
    {
      $this->XAddr = $XAddr;
      $this->FixedLayout = $FixedLayout;
      $this->any = $any;
    }

    /**
     * @return anyURI
     */
    public function getXAddr()
    {
      return $this->XAddr;
    }

    /**
     * @param anyURI $XAddr
     * @return \app\modules\dvr\components\onvif\wsdl\DisplayCapabilities
     */
    public function setXAddr($XAddr)
    {
      $this->XAddr = $XAddr;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFixedLayout()
    {
      return $this->FixedLayout;
    }

    /**
     * @param boolean $FixedLayout
     * @return \app\modules\dvr\components\onvif\wsdl\DisplayCapabilities
     */
    public function setFixedLayout($FixedLayout)
    {
      $this->FixedLayout = $FixedLayout;
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
     * @return \app\modules\dvr\components\onvif\wsdl\DisplayCapabilities
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
