<?php

namespace app\modules\dvr\components\onvif\wsdl;

class ProfileCapabilities
{

    /**
     * @var int $MaximumNumberOfProfiles
     */
    protected $MaximumNumberOfProfiles = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param int $MaximumNumberOfProfiles
     * @param string $any
     */
    public function __construct($MaximumNumberOfProfiles, $any)
    {
      $this->MaximumNumberOfProfiles = $MaximumNumberOfProfiles;
      $this->any = $any;
    }

    /**
     * @return int
     */
    public function getMaximumNumberOfProfiles()
    {
      return $this->MaximumNumberOfProfiles;
    }

    /**
     * @param int $MaximumNumberOfProfiles
     * @return \app\modules\dvr\components\onvif\wsdl\ProfileCapabilities
     */
    public function setMaximumNumberOfProfiles($MaximumNumberOfProfiles)
    {
      $this->MaximumNumberOfProfiles = $MaximumNumberOfProfiles;
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
     * @return \app\modules\dvr\components\onvif\wsdl\ProfileCapabilities
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
