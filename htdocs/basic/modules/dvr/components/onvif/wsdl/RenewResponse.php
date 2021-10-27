<?php

namespace app\modules\dvr\components\onvif\wsdl;

class RenewResponse
{

    /**
     * @var \DateTime $TerminationTime
     */
    protected $TerminationTime = null;

    /**
     * @var \DateTime $CurrentTime
     */
    protected $CurrentTime = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param \DateTime $TerminationTime
     * @param \DateTime $CurrentTime
     * @param string $any
     */
    public function __construct(\DateTime $TerminationTime, \DateTime $CurrentTime, $any)
    {
      $this->TerminationTime = $TerminationTime->format(\DateTime::ATOM);
      $this->CurrentTime = $CurrentTime->format(\DateTime::ATOM);
      $this->any = $any;
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
     * @return \app\modules\dvr\components\onvif\wsdl\RenewResponse
     */
    public function setTerminationTime(\DateTime $TerminationTime)
    {
      $this->TerminationTime = $TerminationTime->format(\DateTime::ATOM);
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
     * @return \app\modules\dvr\components\onvif\wsdl\RenewResponse
     */
    public function setCurrentTime(\DateTime $CurrentTime)
    {
      $this->CurrentTime = $CurrentTime->format(\DateTime::ATOM);
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
     * @return \app\modules\dvr\components\onvif\wsdl\RenewResponse
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
