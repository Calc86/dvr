<?php

namespace app\modules\dvr\components\onvif\wsdl;

class StorageConfiguration extends DeviceEntity
{

    /**
     * @var StorageConfigurationData $Data
     */
    protected $Data = null;

    /**
     * @param ReferenceToken $token
     * @param StorageConfigurationData $Data
     */
    public function __construct($token, $Data)
    {
      parent::__construct($token);
      $this->Data = $Data;
    }

    /**
     * @return StorageConfigurationData
     */
    public function getData()
    {
      return $this->Data;
    }

    /**
     * @param StorageConfigurationData $Data
     * @return \app\modules\dvr\components\onvif\wsdl\StorageConfiguration
     */
    public function setData($Data)
    {
      $this->Data = $Data;
      return $this;
    }

}
