<?php

namespace app\modules\dvr\components\onvif\wsdl;

class GetDeviceInformationResponse
{

    /**
     * @var string $Manufacturer
     */
    protected $Manufacturer = null;

    /**
     * @var string $Model
     */
    protected $Model = null;

    /**
     * @var string $FirmwareVersion
     */
    protected $FirmwareVersion = null;

    /**
     * @var string $SerialNumber
     */
    protected $SerialNumber = null;

    /**
     * @var string $HardwareId
     */
    protected $HardwareId = null;

    /**
     * @param string $Manufacturer
     * @param string $Model
     * @param string $FirmwareVersion
     * @param string $SerialNumber
     * @param string $HardwareId
     */
    public function __construct($Manufacturer, $Model, $FirmwareVersion, $SerialNumber, $HardwareId)
    {
      $this->Manufacturer = $Manufacturer;
      $this->Model = $Model;
      $this->FirmwareVersion = $FirmwareVersion;
      $this->SerialNumber = $SerialNumber;
      $this->HardwareId = $HardwareId;
    }

    /**
     * @return string
     */
    public function getManufacturer()
    {
      return $this->Manufacturer;
    }

    /**
     * @param string $Manufacturer
     * @return \app\modules\dvr\components\onvif\wsdl\GetDeviceInformationResponse
     */
    public function setManufacturer($Manufacturer)
    {
      $this->Manufacturer = $Manufacturer;
      return $this;
    }

    /**
     * @return string
     */
    public function getModel()
    {
      return $this->Model;
    }

    /**
     * @param string $Model
     * @return \app\modules\dvr\components\onvif\wsdl\GetDeviceInformationResponse
     */
    public function setModel($Model)
    {
      $this->Model = $Model;
      return $this;
    }

    /**
     * @return string
     */
    public function getFirmwareVersion()
    {
      return $this->FirmwareVersion;
    }

    /**
     * @param string $FirmwareVersion
     * @return \app\modules\dvr\components\onvif\wsdl\GetDeviceInformationResponse
     */
    public function setFirmwareVersion($FirmwareVersion)
    {
      $this->FirmwareVersion = $FirmwareVersion;
      return $this;
    }

    /**
     * @return string
     */
    public function getSerialNumber()
    {
      return $this->SerialNumber;
    }

    /**
     * @param string $SerialNumber
     * @return \app\modules\dvr\components\onvif\wsdl\GetDeviceInformationResponse
     */
    public function setSerialNumber($SerialNumber)
    {
      $this->SerialNumber = $SerialNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getHardwareId()
    {
      return $this->HardwareId;
    }

    /**
     * @param string $HardwareId
     * @return \app\modules\dvr\components\onvif\wsdl\GetDeviceInformationResponse
     */
    public function setHardwareId($HardwareId)
    {
      $this->HardwareId = $HardwareId;
      return $this;
    }

}
