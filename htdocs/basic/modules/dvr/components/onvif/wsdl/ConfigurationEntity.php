<?php

namespace app\modules\dvr\components\onvif\wsdl;

class ConfigurationEntity
{

    /**
     * @var Name $Name
     */
    protected $Name = null;

    /**
     * @var int $UseCount
     */
    protected $UseCount = null;

    /**
     * @var ReferenceToken $token
     */
    protected $token = null;

    /**
     * @param Name $Name
     * @param int $UseCount
     * @param ReferenceToken $token
     */
    public function __construct($Name, $UseCount, $token)
    {
      $this->Name = $Name;
      $this->UseCount = $UseCount;
      $this->token = $token;
    }

    /**
     * @return Name
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param Name $Name
     * @return \app\modules\dvr\components\onvif\wsdl\ConfigurationEntity
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return int
     */
    public function getUseCount()
    {
      return $this->UseCount;
    }

    /**
     * @param int $UseCount
     * @return \app\modules\dvr\components\onvif\wsdl\ConfigurationEntity
     */
    public function setUseCount($UseCount)
    {
      $this->UseCount = $UseCount;
      return $this;
    }

    /**
     * @return ReferenceToken
     */
    public function getToken()
    {
      return $this->token;
    }

    /**
     * @param ReferenceToken $token
     * @return \app\modules\dvr\components\onvif\wsdl\ConfigurationEntity
     */
    public function setToken($token)
    {
      $this->token = $token;
      return $this;
    }

}
