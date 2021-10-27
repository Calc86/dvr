<?php

namespace app\modules\dvr\components\onvif\wsdl;

class UpgradeType
{

    /**
     * @var SupportedEnvType[] $SupportedEnvelope
     */
    protected $SupportedEnvelope = null;

    /**
     * @param SupportedEnvType[] $SupportedEnvelope
     */
    public function __construct(array $SupportedEnvelope)
    {
      $this->SupportedEnvelope = $SupportedEnvelope;
    }

    /**
     * @return SupportedEnvType[]
     */
    public function getSupportedEnvelope()
    {
      return $this->SupportedEnvelope;
    }

    /**
     * @param SupportedEnvType[] $SupportedEnvelope
     * @return \app\modules\dvr\components\onvif\wsdl\UpgradeType
     */
    public function setSupportedEnvelope(array $SupportedEnvelope)
    {
      $this->SupportedEnvelope = $SupportedEnvelope;
      return $this;
    }

}
