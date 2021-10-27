<?php

namespace app\modules\dvr\components\onvif\wsdl;

class GetSystemBackupResponse
{

    /**
     * @var BackupFile $BackupFiles
     */
    protected $BackupFiles = null;

    /**
     * @param BackupFile $BackupFiles
     */
    public function __construct($BackupFiles)
    {
      $this->BackupFiles = $BackupFiles;
    }

    /**
     * @return BackupFile
     */
    public function getBackupFiles()
    {
      return $this->BackupFiles;
    }

    /**
     * @param BackupFile $BackupFiles
     * @return \app\modules\dvr\components\onvif\wsdl\GetSystemBackupResponse
     */
    public function setBackupFiles($BackupFiles)
    {
      $this->BackupFiles = $BackupFiles;
      return $this;
    }

}
