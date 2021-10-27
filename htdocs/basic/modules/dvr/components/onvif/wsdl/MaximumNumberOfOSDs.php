<?php

namespace app\modules\dvr\components\onvif\wsdl;

class MaximumNumberOfOSDs
{

    /**
     * @var int $Total
     */
    protected $Total = null;

    /**
     * @var int $Image
     */
    protected $Image = null;

    /**
     * @var int $PlainText
     */
    protected $PlainText = null;

    /**
     * @var int $Date
     */
    protected $Date = null;

    /**
     * @var int $Time
     */
    protected $Time = null;

    /**
     * @var int $DateAndTime
     */
    protected $DateAndTime = null;

    /**
     * @param int $Total
     * @param int $Image
     * @param int $PlainText
     * @param int $Date
     * @param int $Time
     * @param int $DateAndTime
     */
    public function __construct($Total, $Image, $PlainText, $Date, $Time, $DateAndTime)
    {
      $this->Total = $Total;
      $this->Image = $Image;
      $this->PlainText = $PlainText;
      $this->Date = $Date;
      $this->Time = $Time;
      $this->DateAndTime = $DateAndTime;
    }

    /**
     * @return int
     */
    public function getTotal()
    {
      return $this->Total;
    }

    /**
     * @param int $Total
     * @return \app\modules\dvr\components\onvif\wsdl\MaximumNumberOfOSDs
     */
    public function setTotal($Total)
    {
      $this->Total = $Total;
      return $this;
    }

    /**
     * @return int
     */
    public function getImage()
    {
      return $this->Image;
    }

    /**
     * @param int $Image
     * @return \app\modules\dvr\components\onvif\wsdl\MaximumNumberOfOSDs
     */
    public function setImage($Image)
    {
      $this->Image = $Image;
      return $this;
    }

    /**
     * @return int
     */
    public function getPlainText()
    {
      return $this->PlainText;
    }

    /**
     * @param int $PlainText
     * @return \app\modules\dvr\components\onvif\wsdl\MaximumNumberOfOSDs
     */
    public function setPlainText($PlainText)
    {
      $this->PlainText = $PlainText;
      return $this;
    }

    /**
     * @return int
     */
    public function getDate()
    {
      return $this->Date;
    }

    /**
     * @param int $Date
     * @return \app\modules\dvr\components\onvif\wsdl\MaximumNumberOfOSDs
     */
    public function setDate($Date)
    {
      $this->Date = $Date;
      return $this;
    }

    /**
     * @return int
     */
    public function getTime()
    {
      return $this->Time;
    }

    /**
     * @param int $Time
     * @return \app\modules\dvr\components\onvif\wsdl\MaximumNumberOfOSDs
     */
    public function setTime($Time)
    {
      $this->Time = $Time;
      return $this;
    }

    /**
     * @return int
     */
    public function getDateAndTime()
    {
      return $this->DateAndTime;
    }

    /**
     * @param int $DateAndTime
     * @return \app\modules\dvr\components\onvif\wsdl\MaximumNumberOfOSDs
     */
    public function setDateAndTime($DateAndTime)
    {
      $this->DateAndTime = $DateAndTime;
      return $this;
    }

}
