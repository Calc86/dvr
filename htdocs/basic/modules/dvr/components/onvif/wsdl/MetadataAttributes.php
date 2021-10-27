<?php

namespace app\modules\dvr\components\onvif\wsdl;

class MetadataAttributes
{

    /**
     * @var boolean $CanContainPTZ
     */
    protected $CanContainPTZ = null;

    /**
     * @var boolean $CanContainAnalytics
     */
    protected $CanContainAnalytics = null;

    /**
     * @var boolean $CanContainNotifications
     */
    protected $CanContainNotifications = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var StringAttrList $PtzSpaces
     */
    protected $PtzSpaces = null;

    /**
     * @param boolean $CanContainPTZ
     * @param boolean $CanContainAnalytics
     * @param boolean $CanContainNotifications
     * @param string $any
     * @param StringAttrList $PtzSpaces
     */
    public function __construct($CanContainPTZ, $CanContainAnalytics, $CanContainNotifications, $any, $PtzSpaces)
    {
      $this->CanContainPTZ = $CanContainPTZ;
      $this->CanContainAnalytics = $CanContainAnalytics;
      $this->CanContainNotifications = $CanContainNotifications;
      $this->any = $any;
      $this->PtzSpaces = $PtzSpaces;
    }

    /**
     * @return boolean
     */
    public function getCanContainPTZ()
    {
      return $this->CanContainPTZ;
    }

    /**
     * @param boolean $CanContainPTZ
     * @return \app\modules\dvr\components\onvif\wsdl\MetadataAttributes
     */
    public function setCanContainPTZ($CanContainPTZ)
    {
      $this->CanContainPTZ = $CanContainPTZ;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCanContainAnalytics()
    {
      return $this->CanContainAnalytics;
    }

    /**
     * @param boolean $CanContainAnalytics
     * @return \app\modules\dvr\components\onvif\wsdl\MetadataAttributes
     */
    public function setCanContainAnalytics($CanContainAnalytics)
    {
      $this->CanContainAnalytics = $CanContainAnalytics;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCanContainNotifications()
    {
      return $this->CanContainNotifications;
    }

    /**
     * @param boolean $CanContainNotifications
     * @return \app\modules\dvr\components\onvif\wsdl\MetadataAttributes
     */
    public function setCanContainNotifications($CanContainNotifications)
    {
      $this->CanContainNotifications = $CanContainNotifications;
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
     * @return \app\modules\dvr\components\onvif\wsdl\MetadataAttributes
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return StringAttrList
     */
    public function getPtzSpaces()
    {
      return $this->PtzSpaces;
    }

    /**
     * @param StringAttrList $PtzSpaces
     * @return \app\modules\dvr\components\onvif\wsdl\MetadataAttributes
     */
    public function setPtzSpaces($PtzSpaces)
    {
      $this->PtzSpaces = $PtzSpaces;
      return $this;
    }

}
