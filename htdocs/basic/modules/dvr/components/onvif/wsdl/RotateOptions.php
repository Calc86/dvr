<?php

namespace app\modules\dvr\components\onvif\wsdl;

class RotateOptions
{

    /**
     * @var RotateMode[] $Mode
     */
    protected $Mode = null;

    /**
     * @var IntItems $DegreeList
     */
    protected $DegreeList = null;

    /**
     * @var RotateOptionsExtension $Extension
     */
    protected $Extension = null;

    /**
     * @var boolean $Reboot
     */
    protected $Reboot = null;

    /**
     * @param RotateMode[] $Mode
     * @param boolean $Reboot
     */
    public function __construct(array $Mode, $Reboot)
    {
      $this->Mode = $Mode;
      $this->Reboot = $Reboot;
    }

    /**
     * @return RotateMode[]
     */
    public function getMode()
    {
      return $this->Mode;
    }

    /**
     * @param RotateMode[] $Mode
     * @return \app\modules\dvr\components\onvif\wsdl\RotateOptions
     */
    public function setMode(array $Mode)
    {
      $this->Mode = $Mode;
      return $this;
    }

    /**
     * @return IntItems
     */
    public function getDegreeList()
    {
      return $this->DegreeList;
    }

    /**
     * @param IntItems $DegreeList
     * @return \app\modules\dvr\components\onvif\wsdl\RotateOptions
     */
    public function setDegreeList($DegreeList)
    {
      $this->DegreeList = $DegreeList;
      return $this;
    }

    /**
     * @return RotateOptionsExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param RotateOptionsExtension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\RotateOptions
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReboot()
    {
      return $this->Reboot;
    }

    /**
     * @param boolean $Reboot
     * @return \app\modules\dvr\components\onvif\wsdl\RotateOptions
     */
    public function setReboot($Reboot)
    {
      $this->Reboot = $Reboot;
      return $this;
    }

}
