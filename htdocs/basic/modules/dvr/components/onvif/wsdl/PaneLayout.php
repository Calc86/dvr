<?php

namespace app\modules\dvr\components\onvif\wsdl;

class PaneLayout
{

    /**
     * @var ReferenceToken $Pane
     */
    protected $Pane = null;

    /**
     * @var Rectangle $Area
     */
    protected $Area = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param ReferenceToken $Pane
     * @param Rectangle $Area
     * @param string $any
     */
    public function __construct($Pane, $Area, $any)
    {
      $this->Pane = $Pane;
      $this->Area = $Area;
      $this->any = $any;
    }

    /**
     * @return ReferenceToken
     */
    public function getPane()
    {
      return $this->Pane;
    }

    /**
     * @param ReferenceToken $Pane
     * @return \app\modules\dvr\components\onvif\wsdl\PaneLayout
     */
    public function setPane($Pane)
    {
      $this->Pane = $Pane;
      return $this;
    }

    /**
     * @return Rectangle
     */
    public function getArea()
    {
      return $this->Area;
    }

    /**
     * @param Rectangle $Area
     * @return \app\modules\dvr\components\onvif\wsdl\PaneLayout
     */
    public function setArea($Area)
    {
      $this->Area = $Area;
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
     * @return \app\modules\dvr\components\onvif\wsdl\PaneLayout
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
