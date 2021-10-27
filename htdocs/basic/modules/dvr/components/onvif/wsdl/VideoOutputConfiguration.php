<?php

namespace app\modules\dvr\components\onvif\wsdl;

class VideoOutputConfiguration extends ConfigurationEntity
{

    /**
     * @var ReferenceToken $OutputToken
     */
    protected $OutputToken = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param Name $Name
     * @param int $UseCount
     * @param ReferenceToken $token
     * @param ReferenceToken $OutputToken
     * @param string $any
     */
    public function __construct($Name, $UseCount, $token, $OutputToken, $any)
    {
      parent::__construct($Name, $UseCount, $token);
      $this->OutputToken = $OutputToken;
      $this->any = $any;
    }

    /**
     * @return ReferenceToken
     */
    public function getOutputToken()
    {
      return $this->OutputToken;
    }

    /**
     * @param ReferenceToken $OutputToken
     * @return \app\modules\dvr\components\onvif\wsdl\VideoOutputConfiguration
     */
    public function setOutputToken($OutputToken)
    {
      $this->OutputToken = $OutputToken;
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
     * @return \app\modules\dvr\components\onvif\wsdl\VideoOutputConfiguration
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
