<?php

namespace app\modules\dvr\components\onvif\wsdl;

class UnrecognizedPolicyRequestFaultType extends BaseFaultType
{

    /**
     * @var QName[] $UnrecognizedPolicy
     */
    protected $UnrecognizedPolicy = null;

    /**
     * @param string $any
     * @param \DateTime $Timestamp
     */
    public function __construct($any, \DateTime $Timestamp)
    {
      parent::__construct($any, $Timestamp);
    }

    /**
     * @return QName[]
     */
    public function getUnrecognizedPolicy()
    {
      return $this->UnrecognizedPolicy;
    }

    /**
     * @param QName[] $UnrecognizedPolicy
     * @return \app\modules\dvr\components\onvif\wsdl\UnrecognizedPolicyRequestFaultType
     */
    public function setUnrecognizedPolicy(array $UnrecognizedPolicy = null)
    {
      $this->UnrecognizedPolicy = $UnrecognizedPolicy;
      return $this;
    }

}
