<?php

namespace app\modules\dvr\components\onvif\wsdl;

class GetSystemLog
{

    /**
     * @var SystemLogType $LogType
     */
    protected $LogType = null;

    /**
     * @param SystemLogType $LogType
     */
    public function __construct($LogType)
    {
      $this->LogType = $LogType;
    }

    /**
     * @return SystemLogType
     */
    public function getLogType()
    {
      return $this->LogType;
    }

    /**
     * @param SystemLogType $LogType
     * @return \app\modules\dvr\components\onvif\wsdl\GetSystemLog
     */
    public function setLogType($LogType)
    {
      $this->LogType = $LogType;
      return $this;
    }

}
