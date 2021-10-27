<?php

namespace app\modules\dvr\components\onvif\wsdl;

class RestoreSystem
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
     * @return \app\modules\dvr\components\onvif\wsdl\RestoreSystem
     */
    public function setBackupFiles($BackupFiles)
    {
      $this->BackupFiles = $BackupFiles;
      return $this;
    }

}
