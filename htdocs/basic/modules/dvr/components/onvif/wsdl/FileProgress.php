<?php

namespace app\modules\dvr\components\onvif\wsdl;

class FileProgress
{

    /**
     * @var string $FileName
     */
    protected $FileName = null;

    /**
     * @var float $Progress
     */
    protected $Progress = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $FileName
     * @param float $Progress
     * @param string $any
     */
    public function __construct($FileName, $Progress, $any)
    {
      $this->FileName = $FileName;
      $this->Progress = $Progress;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getFileName()
    {
      return $this->FileName;
    }

    /**
     * @param string $FileName
     * @return \app\modules\dvr\components\onvif\wsdl\FileProgress
     */
    public function setFileName($FileName)
    {
      $this->FileName = $FileName;
      return $this;
    }

    /**
     * @return float
     */
    public function getProgress()
    {
      return $this->Progress;
    }

    /**
     * @param float $Progress
     * @return \app\modules\dvr\components\onvif\wsdl\FileProgress
     */
    public function setProgress($Progress)
    {
      $this->Progress = $Progress;
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
     * @return \app\modules\dvr\components\onvif\wsdl\FileProgress
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
