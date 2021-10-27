<?php

namespace app\modules\dvr\components\onvif\wsdl;

class AudioClassCandidate
{

    /**
     * @var AudioClassType $Type
     */
    protected $Type = null;

    /**
     * @var float $Likelihood
     */
    protected $Likelihood = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param AudioClassType $Type
     * @param float $Likelihood
     * @param string $any
     */
    public function __construct($Type, $Likelihood, $any)
    {
      $this->Type = $Type;
      $this->Likelihood = $Likelihood;
      $this->any = $any;
    }

    /**
     * @return AudioClassType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param AudioClassType $Type
     * @return \app\modules\dvr\components\onvif\wsdl\AudioClassCandidate
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return float
     */
    public function getLikelihood()
    {
      return $this->Likelihood;
    }

    /**
     * @param float $Likelihood
     * @return \app\modules\dvr\components\onvif\wsdl\AudioClassCandidate
     */
    public function setLikelihood($Likelihood)
    {
      $this->Likelihood = $Likelihood;
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
     * @return \app\modules\dvr\components\onvif\wsdl\AudioClassCandidate
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
