<?php

namespace app\modules\dvr\components\onvif\wsdl;

class Space2DDescription
{

    /**
     * @var anyURI $URI
     */
    protected $URI = null;

    /**
     * @var FloatRange $XRange
     */
    protected $XRange = null;

    /**
     * @var FloatRange $YRange
     */
    protected $YRange = null;

    /**
     * @param anyURI $URI
     * @param FloatRange $XRange
     * @param FloatRange $YRange
     */
    public function __construct($URI, $XRange, $YRange)
    {
      $this->URI = $URI;
      $this->XRange = $XRange;
      $this->YRange = $YRange;
    }

    /**
     * @return anyURI
     */
    public function getURI()
    {
      return $this->URI;
    }

    /**
     * @param anyURI $URI
     * @return \app\modules\dvr\components\onvif\wsdl\Space2DDescription
     */
    public function setURI($URI)
    {
      $this->URI = $URI;
      return $this;
    }

    /**
     * @return FloatRange
     */
    public function getXRange()
    {
      return $this->XRange;
    }

    /**
     * @param FloatRange $XRange
     * @return \app\modules\dvr\components\onvif\wsdl\Space2DDescription
     */
    public function setXRange($XRange)
    {
      $this->XRange = $XRange;
      return $this;
    }

    /**
     * @return FloatRange
     */
    public function getYRange()
    {
      return $this->YRange;
    }

    /**
     * @param FloatRange $YRange
     * @return \app\modules\dvr\components\onvif\wsdl\Space2DDescription
     */
    public function setYRange($YRange)
    {
      $this->YRange = $YRange;
      return $this;
    }

}
