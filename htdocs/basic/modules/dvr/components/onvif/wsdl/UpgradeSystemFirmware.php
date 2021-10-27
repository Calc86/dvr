<?php

namespace app\modules\dvr\components\onvif\wsdl;

class UpgradeSystemFirmware
{

    /**
     * @var AttachmentData $Firmware
     */
    protected $Firmware = null;

    /**
     * @param AttachmentData $Firmware
     */
    public function __construct($Firmware)
    {
      $this->Firmware = $Firmware;
    }

    /**
     * @return AttachmentData
     */
    public function getFirmware()
    {
      return $this->Firmware;
    }

    /**
     * @param AttachmentData $Firmware
     * @return \app\modules\dvr\components\onvif\wsdl\UpgradeSystemFirmware
     */
    public function setFirmware($Firmware)
    {
      $this->Firmware = $Firmware;
      return $this;
    }

}
