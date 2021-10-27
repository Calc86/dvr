<?php

namespace app\modules\dvr\components\onvif\wsdl;

class Mpeg4Configuration
{

    /**
     * @var int $GovLength
     */
    protected $GovLength = null;

    /**
     * @var Mpeg4Profile $Mpeg4Profile
     */
    protected $Mpeg4Profile = null;

    /**
     * @param int $GovLength
     * @param Mpeg4Profile $Mpeg4Profile
     */
    public function __construct($GovLength, $Mpeg4Profile)
    {
      $this->GovLength = $GovLength;
      $this->Mpeg4Profile = $Mpeg4Profile;
    }

    /**
     * @return int
     */
    public function getGovLength()
    {
      return $this->GovLength;
    }

    /**
     * @param int $GovLength
     * @return \app\modules\dvr\components\onvif\wsdl\Mpeg4Configuration
     */
    public function setGovLength($GovLength)
    {
      $this->GovLength = $GovLength;
      return $this;
    }

    /**
     * @return Mpeg4Profile
     */
    public function getMpeg4Profile()
    {
      return $this->Mpeg4Profile;
    }

    /**
     * @param Mpeg4Profile $Mpeg4Profile
     * @return \app\modules\dvr\components\onvif\wsdl\Mpeg4Configuration
     */
    public function setMpeg4Profile($Mpeg4Profile)
    {
      $this->Mpeg4Profile = $Mpeg4Profile;
      return $this;
    }

}
