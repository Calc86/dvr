<?php

namespace app\modules\dvr\components\onvif\wsdl;

class SetZeroConfiguration
{

    /**
     * @var ReferenceToken $InterfaceToken
     */
    protected $InterfaceToken = null;

    /**
     * @var boolean $Enabled
     */
    protected $Enabled = null;

    /**
     * @param ReferenceToken $InterfaceToken
     * @param boolean $Enabled
     */
    public function __construct($InterfaceToken, $Enabled)
    {
      $this->InterfaceToken = $InterfaceToken;
      $this->Enabled = $Enabled;
    }

    /**
     * @return ReferenceToken
     */
    public function getInterfaceToken()
    {
      return $this->InterfaceToken;
    }

    /**
     * @param ReferenceToken $InterfaceToken
     * @return \app\modules\dvr\components\onvif\wsdl\SetZeroConfiguration
     */
    public function setInterfaceToken($InterfaceToken)
    {
      $this->InterfaceToken = $InterfaceToken;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnabled()
    {
      return $this->Enabled;
    }

    /**
     * @param boolean $Enabled
     * @return \app\modules\dvr\components\onvif\wsdl\SetZeroConfiguration
     */
    public function setEnabled($Enabled)
    {
      $this->Enabled = $Enabled;
      return $this;
    }

}
