<?php

namespace app\modules\dvr\components\onvif\wsdl;

class AudioDecoderConfiguration extends ConfigurationEntity
{

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param Name $Name
     * @param int $UseCount
     * @param ReferenceToken $token
     * @param string $any
     */
    public function __construct($Name, $UseCount, $token, $any)
    {
      parent::__construct($Name, $UseCount, $token);
      $this->any = $any;
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
     * @return \app\modules\dvr\components\onvif\wsdl\AudioDecoderConfiguration
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
