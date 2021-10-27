<?php

namespace app\modules\dvr\components\onvif\wsdl;

class PTControlDirectionOptions
{

    /**
     * @var EFlipOptions $EFlip
     */
    protected $EFlip = null;

    /**
     * @var ReverseOptions $Reverse
     */
    protected $Reverse = null;

    /**
     * @var PTControlDirectionOptionsExtension $Extension
     */
    protected $Extension = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return EFlipOptions
     */
    public function getEFlip()
    {
      return $this->EFlip;
    }

    /**
     * @param EFlipOptions $EFlip
     * @return \app\modules\dvr\components\onvif\wsdl\PTControlDirectionOptions
     */
    public function setEFlip($EFlip)
    {
      $this->EFlip = $EFlip;
      return $this;
    }

    /**
     * @return ReverseOptions
     */
    public function getReverse()
    {
      return $this->Reverse;
    }

    /**
     * @param ReverseOptions $Reverse
     * @return \app\modules\dvr\components\onvif\wsdl\PTControlDirectionOptions
     */
    public function setReverse($Reverse)
    {
      $this->Reverse = $Reverse;
      return $this;
    }

    /**
     * @return PTControlDirectionOptionsExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param PTControlDirectionOptionsExtension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\PTControlDirectionOptions
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
