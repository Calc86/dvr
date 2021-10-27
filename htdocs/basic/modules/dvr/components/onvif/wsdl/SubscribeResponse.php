<?php

namespace app\modules\dvr\components\onvif\wsdl;

class SubscribeResponse
{

    /**
     * @var EndpointReferenceType $SubscriptionReference
     */
    protected $SubscriptionReference = null;

    /**
     * @var \DateTime $CurrentTime
     */
    protected $CurrentTime = null;

    /**
     * @var \DateTime $TerminationTime
     */
    protected $TerminationTime = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param EndpointReferenceType $SubscriptionReference
     * @param \DateTime $CurrentTime
     * @param \DateTime $TerminationTime
     * @param string $any
     */
    public function __construct($SubscriptionReference, \DateTime $CurrentTime, \DateTime $TerminationTime, $any)
    {
      $this->SubscriptionReference = $SubscriptionReference;
      $this->CurrentTime = $CurrentTime->format(\DateTime::ATOM);
      $this->TerminationTime = $TerminationTime->format(\DateTime::ATOM);
      $this->any = $any;
    }

    /**
     * @return EndpointReferenceType
     */
    public function getSubscriptionReference()
    {
      return $this->SubscriptionReference;
    }

    /**
     * @param EndpointReferenceType $SubscriptionReference
     * @return \app\modules\dvr\components\onvif\wsdl\SubscribeResponse
     */
    public function setSubscriptionReference($SubscriptionReference)
    {
      $this->SubscriptionReference = $SubscriptionReference;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCurrentTime()
    {
      if ($this->CurrentTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CurrentTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CurrentTime
     * @return \app\modules\dvr\components\onvif\wsdl\SubscribeResponse
     */
    public function setCurrentTime(\DateTime $CurrentTime)
    {
      $this->CurrentTime = $CurrentTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTerminationTime()
    {
      if ($this->TerminationTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->TerminationTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $TerminationTime
     * @return \app\modules\dvr\components\onvif\wsdl\SubscribeResponse
     */
    public function setTerminationTime(\DateTime $TerminationTime)
    {
      $this->TerminationTime = $TerminationTime->format(\DateTime::ATOM);
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
     * @return \app\modules\dvr\components\onvif\wsdl\SubscribeResponse
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
