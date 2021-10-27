<?php

namespace app\modules\dvr\components\onvif\wsdl;

class DateTime
{

    /**
     * @var Time $Time
     */
    protected $Time = null;

    /**
     * @var Date $Date
     */
    protected $Date = null;

    /**
     * @param Time $Time
     * @param Date $Date
     */
    public function __construct($Time, $Date)
    {
      $this->Time = $Time;
      $this->Date = $Date;
    }

    /**
     * @return Time
     */
    public function getTime()
    {
      return $this->Time;
    }

    /**
     * @param Time $Time
     * @return \app\modules\dvr\components\onvif\wsdl\DateTime
     */
    public function setTime($Time)
    {
      $this->Time = $Time;
      return $this;
    }

    /**
     * @return Date
     */
    public function getDate()
    {
      return $this->Date;
    }

    /**
     * @param Date $Date
     * @return \app\modules\dvr\components\onvif\wsdl\DateTime
     */
    public function setDate($Date)
    {
      $this->Date = $Date;
      return $this;
    }

}
