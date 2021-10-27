<?php

namespace app\modules\dvr\components\onvif\wsdl;

class SystemLogUriList
{

    /**
     * @var SystemLogUri[] $SystemLog
     */
    protected $SystemLog = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SystemLogUri[]
     */
    public function getSystemLog()
    {
      return $this->SystemLog;
    }

    /**
     * @param SystemLogUri[] $SystemLog
     * @return \app\modules\dvr\components\onvif\wsdl\SystemLogUriList
     */
    public function setSystemLog(array $SystemLog = null)
    {
      $this->SystemLog = $SystemLog;
      return $this;
    }

}
