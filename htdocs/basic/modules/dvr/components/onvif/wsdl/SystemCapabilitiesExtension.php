<?php

namespace app\modules\dvr\components\onvif\wsdl;

class SystemCapabilitiesExtension
{

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var boolean $HttpFirmwareUpgrade
     */
    protected $HttpFirmwareUpgrade = null;

    /**
     * @var boolean $HttpSystemBackup
     */
    protected $HttpSystemBackup = null;

    /**
     * @var boolean $HttpSystemLogging
     */
    protected $HttpSystemLogging = null;

    /**
     * @var boolean $HttpSupportInformation
     */
    protected $HttpSupportInformation = null;

    /**
     * @var SystemCapabilitiesExtension2 $Extension
     */
    protected $Extension = null;

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
     * @return \app\modules\dvr\components\onvif\wsdl\SystemCapabilitiesExtension
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHttpFirmwareUpgrade()
    {
      return $this->HttpFirmwareUpgrade;
    }

    /**
     * @param boolean $HttpFirmwareUpgrade
     * @return \app\modules\dvr\components\onvif\wsdl\SystemCapabilitiesExtension
     */
    public function setHttpFirmwareUpgrade($HttpFirmwareUpgrade)
    {
      $this->HttpFirmwareUpgrade = $HttpFirmwareUpgrade;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHttpSystemBackup()
    {
      return $this->HttpSystemBackup;
    }

    /**
     * @param boolean $HttpSystemBackup
     * @return \app\modules\dvr\components\onvif\wsdl\SystemCapabilitiesExtension
     */
    public function setHttpSystemBackup($HttpSystemBackup)
    {
      $this->HttpSystemBackup = $HttpSystemBackup;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHttpSystemLogging()
    {
      return $this->HttpSystemLogging;
    }

    /**
     * @param boolean $HttpSystemLogging
     * @return \app\modules\dvr\components\onvif\wsdl\SystemCapabilitiesExtension
     */
    public function setHttpSystemLogging($HttpSystemLogging)
    {
      $this->HttpSystemLogging = $HttpSystemLogging;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHttpSupportInformation()
    {
      return $this->HttpSupportInformation;
    }

    /**
     * @param boolean $HttpSupportInformation
     * @return \app\modules\dvr\components\onvif\wsdl\SystemCapabilitiesExtension
     */
    public function setHttpSupportInformation($HttpSupportInformation)
    {
      $this->HttpSupportInformation = $HttpSupportInformation;
      return $this;
    }

    /**
     * @return SystemCapabilitiesExtension2
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param SystemCapabilitiesExtension2 $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\SystemCapabilitiesExtension
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
