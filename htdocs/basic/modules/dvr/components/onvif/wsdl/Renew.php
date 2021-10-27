<?php

namespace app\modules\dvr\components\onvif\wsdl;

class Renew
{

    /**
     * @var AbsoluteOrRelativeTimeType $TerminationTime
     */
    protected $TerminationTime = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param AbsoluteOrRelativeTimeType $TerminationTime
     * @param string $any
     */
    public function __construct($TerminationTime, $any)
    {
      $this->TerminationTime = $TerminationTime;
      $this->any = $any;
    }

    /**
     * @return AbsoluteOrRelativeTimeType
     */
    public function getTerminationTime()
    {
      return $this->TerminationTime;
    }

    /**
     * @param AbsoluteOrRelativeTimeType $TerminationTime
     * @return \app\modules\dvr\components\onvif\wsdl\Renew
     */
    public function setTerminationTime($TerminationTime)
    {
      $this->TerminationTime = $TerminationTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getAny()
    {
      return $this->any;
    }

    /**
     * @param string $any
     * @return \app\modules\dvr\components\onvif\wsdl\Renew
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
