<?php

namespace app\modules\dvr\components\onvif\wsdl;

class SetStorageConfiguration
{

    /**
     * @var StorageConfiguration $StorageConfiguration
     */
    protected $StorageConfiguration = null;

    /**
     * @param StorageConfiguration $StorageConfiguration
     */
    public function __construct($StorageConfiguration)
    {
      $this->StorageConfiguration = $StorageConfiguration;
    }

    /**
     * @return StorageConfiguration
     */
    public function getStorageConfiguration()
    {
      return $this->StorageConfiguration;
    }

    /**
     * @param StorageConfiguration $StorageConfiguration
     * @return \app\modules\dvr\components\onvif\wsdl\SetStorageConfiguration
     */
    public function setStorageConfiguration($StorageConfiguration)
    {
      $this->StorageConfiguration = $StorageConfiguration;
      return $this;
    }

}
