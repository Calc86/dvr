<?php

namespace app\modules\dvr\components\onvif\wsdl;

class GetSystemLogResponse
{

    /**
     * @var SystemLog $SystemLog
     */
    protected $SystemLog = null;

    /**
     * @param SystemLog $SystemLog
     */
    public function __construct($SystemLog)
    {
      $this->SystemLog = $SystemLog;
    }

    /**
     * @return SystemLog
     */
    public function getSystemLog()
    {
      return $this->SystemLog;
    }

    /**
     * @param SystemLog $SystemLog
     * @return \app\modules\dvr\components\onvif\wsdl\GetSystemLogResponse
     */
    public function setSystemLog($SystemLog)
    {
      $this->SystemLog = $SystemLog;
      return $this;
    }

}
