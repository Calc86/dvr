<?php

namespace app\modules\dvr\components\onvif\wsdl;

class AudioSource extends DeviceEntity
{

    /**
     * @var int $Channels
     */
    protected $Channels = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param ReferenceToken $token
     * @param int $Channels
     * @param string $any
     */
    public function __construct($token, $Channels, $any)
    {
      parent::__construct($token);
      $this->Channels = $Channels;
      $this->any = $any;
    }

    /**
     * @return int
     */
    public function getChannels()
    {
      return $this->Channels;
    }

    /**
     * @param int $Channels
     * @return \app\modules\dvr\components\onvif\wsdl\AudioSource
     */
    public function setChannels($Channels)
    {
      $this->Channels = $Channels;
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
     * @return \app\modules\dvr\components\onvif\wsdl\AudioSource
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
