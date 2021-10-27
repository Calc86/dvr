<?php

namespace app\modules\dvr\components\onvif\wsdl;

class CreateStorageConfiguration
{

    /**
     * @var StorageConfigurationData $StorageConfiguration
     */
    protected $StorageConfiguration = null;

    /**
     * @param StorageConfigurationData $StorageConfiguration
     */
    public function __construct($StorageConfiguration)
    {
      $this->StorageConfiguration = $StorageConfiguration;
    }

    /**
     * @return StorageConfigurationData
     */
    public function getStorageConfiguration()
    {
      return $this->StorageConfiguration;
    }

    /**
     * @param StorageConfigurationData $StorageConfiguration
     * @return \app\modules\dvr\components\onvif\wsdl\CreateStorageConfiguration
     */
    public function setStorageConfiguration($StorageConfiguration)
    {
      $this->StorageConfiguration = $StorageConfiguration;
      return $this;
    }

}
