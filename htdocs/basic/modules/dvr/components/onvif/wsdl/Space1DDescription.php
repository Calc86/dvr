<?php

namespace app\modules\dvr\components\onvif\wsdl;

class Space1DDescription
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
     * @param anyURI $URI
     * @param FloatRange $XRange
     */
    public function __construct($URI, $XRange)
    {
      $this->URI = $URI;
      $this->XRange = $XRange;
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
     * @return \app\modules\dvr\components\onvif\wsdl\Space1DDescription
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
     * @return \app\modules\dvr\components\onvif\wsdl\Space1DDescription
     */
    public function setXRange($XRange)
    {
      $this->XRange = $XRange;
      return $this;
    }

}
