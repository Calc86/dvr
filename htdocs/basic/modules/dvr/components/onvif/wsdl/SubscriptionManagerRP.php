<?php

namespace app\modules\dvr\components\onvif\wsdl;

class SubscriptionManagerRP
{

    /**
     * @var EndpointReferenceType $ConsumerReference
     */
    protected $ConsumerReference = null;

    /**
     * @var FilterType $Filter
     */
    protected $Filter = null;

    /**
     * @var SubscriptionPolicyType $SubscriptionPolicy
     */
    protected $SubscriptionPolicy = null;

    /**
     * @var \DateTime $CreationTime
     */
    protected $CreationTime = null;

    /**
     * @param EndpointReferenceType $ConsumerReference
     * @param FilterType $Filter
     * @param SubscriptionPolicyType $SubscriptionPolicy
     * @param \DateTime $CreationTime
     */
    public function __construct($ConsumerReference, $Filter, $SubscriptionPolicy, \DateTime $CreationTime)
    {
      $this->ConsumerReference = $ConsumerReference;
      $this->Filter = $Filter;
      $this->SubscriptionPolicy = $SubscriptionPolicy;
      $this->CreationTime = $CreationTime->format(\DateTime::ATOM);
    }

    /**
     * @return EndpointReferenceType
     */
    public function getConsumerReference()
    {
      return $this->ConsumerReference;
    }

    /**
     * @param EndpointReferenceType $ConsumerReference
     * @return \app\modules\dvr\components\onvif\wsdl\SubscriptionManagerRP
     */
    public function setConsumerReference($ConsumerReference)
    {
      $this->ConsumerReference = $ConsumerReference;
      return $this;
    }

    /**
     * @return FilterType
     */
    public function getFilter()
    {
      return $this->Filter;
    }

    /**
     * @param FilterType $Filter
     * @return \app\modules\dvr\components\onvif\wsdl\SubscriptionManagerRP
     */
    public function setFilter($Filter)
    {
      $this->Filter = $Filter;
      return $this;
    }

    /**
     * @return SubscriptionPolicyType
     */
    public function getSubscriptionPolicy()
    {
      return $this->SubscriptionPolicy;
    }

    /**
     * @param SubscriptionPolicyType $SubscriptionPolicy
     * @return \app\modules\dvr\components\onvif\wsdl\SubscriptionManagerRP
     */
    public function setSubscriptionPolicy($SubscriptionPolicy)
    {
      $this->SubscriptionPolicy = $SubscriptionPolicy;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreationTime()
    {
      if ($this->CreationTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CreationTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CreationTime
     * @return \app\modules\dvr\components\onvif\wsdl\SubscriptionManagerRP
     */
    public function setCreationTime(\DateTime $CreationTime)
    {
      $this->CreationTime = $CreationTime->format(\DateTime::ATOM);
      return $this;
    }

}
