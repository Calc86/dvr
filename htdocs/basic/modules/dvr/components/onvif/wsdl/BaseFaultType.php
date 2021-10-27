<?php

namespace app\modules\dvr\components\onvif\wsdl;

class BaseFaultType
{

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var \DateTime $Timestamp
     */
    protected $Timestamp = null;

    /**
     * @var EndpointReferenceType $Originator
     */
    protected $Originator = null;

    /**
     * @var ErrorCode $ErrorCode
     */
    protected $ErrorCode = null;

    /**
     * @var Description[] $Description
     */
    protected $Description = null;

    /**
     * @var FaultCause $FaultCause
     */
    protected $FaultCause = null;

    /**
     * @param string $any
     * @param \DateTime $Timestamp
     */
    public function __construct($any, \DateTime $Timestamp)
    {
      $this->any = $any;
      $this->Timestamp = $Timestamp->format(\DateTime::ATOM);
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
     * @return \app\modules\dvr\components\onvif\wsdl\BaseFaultType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTimestamp()
    {
      if ($this->Timestamp == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Timestamp);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Timestamp
     * @return \app\modules\dvr\components\onvif\wsdl\BaseFaultType
     */
    public function setTimestamp(\DateTime $Timestamp)
    {
      $this->Timestamp = $Timestamp->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return EndpointReferenceType
     */
    public function getOriginator()
    {
      return $this->Originator;
    }

    /**
     * @param EndpointReferenceType $Originator
     * @return \app\modules\dvr\components\onvif\wsdl\BaseFaultType
     */
    public function setOriginator($Originator)
    {
      $this->Originator = $Originator;
      return $this;
    }

    /**
     * @return ErrorCode
     */
    public function getErrorCode()
    {
      return $this->ErrorCode;
    }

    /**
     * @param ErrorCode $ErrorCode
     * @return \app\modules\dvr\components\onvif\wsdl\BaseFaultType
     */
    public function setErrorCode($ErrorCode)
    {
      $this->ErrorCode = $ErrorCode;
      return $this;
    }

    /**
     * @return Description[]
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param Description[] $Description
     * @return \app\modules\dvr\components\onvif\wsdl\BaseFaultType
     */
    public function setDescription(array $Description = null)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return FaultCause
     */
    public function getFaultCause()
    {
      return $this->FaultCause;
    }

    /**
     * @param FaultCause $FaultCause
     * @return \app\modules\dvr\components\onvif\wsdl\BaseFaultType
     */
    public function setFaultCause($FaultCause)
    {
      $this->FaultCause = $FaultCause;
      return $this;
    }

}
