<?php

namespace app\modules\dvr\components\onvif\wsdl;

class UnsupportedPolicyRequestFaultType extends BaseFaultType
{

    /**
     * @var QName[] $UnsupportedPolicy
     */
    protected $UnsupportedPolicy = null;

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
    public function getUnsupportedPolicy()
    {
      return $this->UnsupportedPolicy;
    }

    /**
     * @param QName[] $UnsupportedPolicy
     * @return \app\modules\dvr\components\onvif\wsdl\UnsupportedPolicyRequestFaultType
     */
    public function setUnsupportedPolicy(array $UnsupportedPolicy = null)
    {
      $this->UnsupportedPolicy = $UnsupportedPolicy;
      return $this;
    }

}
