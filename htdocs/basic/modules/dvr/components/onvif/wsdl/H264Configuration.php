<?php

namespace app\modules\dvr\components\onvif\wsdl;

class H264Configuration
{

    /**
     * @var int $GovLength
     */
    protected $GovLength = null;

    /**
     * @var H264Profile $H264Profile
     */
    protected $H264Profile = null;

    /**
     * @param int $GovLength
     * @param H264Profile $H264Profile
     */
    public function __construct($GovLength, $H264Profile)
    {
      $this->GovLength = $GovLength;
      $this->H264Profile = $H264Profile;
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
     * @return \app\modules\dvr\components\onvif\wsdl\H264Configuration
     */
    public function setGovLength($GovLength)
    {
      $this->GovLength = $GovLength;
      return $this;
    }

    /**
     * @return H264Profile
     */
    public function getH264Profile()
    {
      return $this->H264Profile;
    }

    /**
     * @param H264Profile $H264Profile
     * @return \app\modules\dvr\components\onvif\wsdl\H264Configuration
     */
    public function setH264Profile($H264Profile)
    {
      $this->H264Profile = $H264Profile;
      return $this;
    }

}
