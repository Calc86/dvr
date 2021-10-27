<?php

namespace app\modules\dvr\components\onvif\wsdl;

class SetHostname
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @param string $Name
     */
    public function __construct($Name)
    {
      $this->Name = $Name;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \app\modules\dvr\components\onvif\wsdl\SetHostname
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
