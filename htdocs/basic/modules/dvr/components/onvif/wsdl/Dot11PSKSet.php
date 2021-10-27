<?php

namespace app\modules\dvr\components\onvif\wsdl;

class Dot11PSKSet
{

    /**
     * @var Dot11PSK $Key
     */
    protected $Key = null;

    /**
     * @var Dot11PSKPassphrase $Passphrase
     */
    protected $Passphrase = null;

    /**
     * @var Dot11PSKSetExtension $Extension
     */
    protected $Extension = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Dot11PSK
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param Dot11PSK $Key
     * @return \app\modules\dvr\components\onvif\wsdl\Dot11PSKSet
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return Dot11PSKPassphrase
     */
    public function getPassphrase()
    {
      return $this->Passphrase;
    }

    /**
     * @param Dot11PSKPassphrase $Passphrase
     * @return \app\modules\dvr\components\onvif\wsdl\Dot11PSKSet
     */
    public function setPassphrase($Passphrase)
    {
      $this->Passphrase = $Passphrase;
      return $this;
    }

    /**
     * @return Dot11PSKSetExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param Dot11PSKSetExtension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\Dot11PSKSet
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
