<?php

namespace app\modules\dvr\components\onvif\wsdl;

class OnvifVersion
{

    /**
     * @var int $Major
     */
    protected $Major = null;

    /**
     * @var int $Minor
     */
    protected $Minor = null;

    /**
     * @param int $Major
     * @param int $Minor
     */
    public function __construct($Major, $Minor)
    {
      $this->Major = $Major;
      $this->Minor = $Minor;
    }

    /**
     * @return int
     */
    public function getMajor()
    {
      return $this->Major;
    }

    /**
     * @param int $Major
     * @return \app\modules\dvr\components\onvif\wsdl\OnvifVersion
     */
    public function setMajor($Major)
    {
      $this->Major = $Major;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinor()
    {
      return $this->Minor;
    }

    /**
     * @param int $Minor
     * @return \app\modules\dvr\components\onvif\wsdl\OnvifVersion
     */
    public function setMinor($Minor)
    {
      $this->Minor = $Minor;
      return $this;
    }

}
