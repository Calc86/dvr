<?php

namespace app\modules\dvr\components\onvif\wsdl;

class PolylineArrayConfiguration
{

    /**
     * @var PolylineArray $PolylineArray
     */
    protected $PolylineArray = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param PolylineArray $PolylineArray
     * @param string $any
     */
    public function __construct($PolylineArray, $any)
    {
      $this->PolylineArray = $PolylineArray;
      $this->any = $any;
    }

    /**
     * @return PolylineArray
     */
    public function getPolylineArray()
    {
      return $this->PolylineArray;
    }

    /**
     * @param PolylineArray $PolylineArray
     * @return \app\modules\dvr\components\onvif\wsdl\PolylineArrayConfiguration
     */
    public function setPolylineArray($PolylineArray)
    {
      $this->PolylineArray = $PolylineArray;
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
     * @return \app\modules\dvr\components\onvif\wsdl\PolylineArrayConfiguration
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
