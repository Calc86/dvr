<?php

namespace app\modules\dvr\components\onvif\wsdl;

class SetAccessPolicy
{

    /**
     * @var BinaryData $PolicyFile
     */
    protected $PolicyFile = null;

    /**
     * @param BinaryData $PolicyFile
     */
    public function __construct($PolicyFile)
    {
      $this->PolicyFile = $PolicyFile;
    }

    /**
     * @return BinaryData
     */
    public function getPolicyFile()
    {
      return $this->PolicyFile;
    }

    /**
     * @param BinaryData $PolicyFile
     * @return \app\modules\dvr\components\onvif\wsdl\SetAccessPolicy
     */
    public function setPolicyFile($PolicyFile)
    {
      $this->PolicyFile = $PolicyFile;
      return $this;
    }

}
