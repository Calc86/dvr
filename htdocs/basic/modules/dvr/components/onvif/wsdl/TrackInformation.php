<?php

namespace app\modules\dvr\components\onvif\wsdl;

class TrackInformation
{

    /**
     * @var TrackReference $TrackToken
     */
    protected $TrackToken = null;

    /**
     * @var TrackType $TrackType
     */
    protected $TrackType = null;

    /**
     * @var Description $Description
     */
    protected $Description = null;

    /**
     * @var \DateTime $DataFrom
     */
    protected $DataFrom = null;

    /**
     * @var \DateTime $DataTo
     */
    protected $DataTo = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param TrackReference $TrackToken
     * @param TrackType $TrackType
     * @param Description $Description
     * @param \DateTime $DataFrom
     * @param \DateTime $DataTo
     * @param string $any
     */
    public function __construct($TrackToken, $TrackType, $Description, \DateTime $DataFrom, \DateTime $DataTo, $any)
    {
      $this->TrackToken = $TrackToken;
      $this->TrackType = $TrackType;
      $this->Description = $Description;
      $this->DataFrom = $DataFrom->format(\DateTime::ATOM);
      $this->DataTo = $DataTo->format(\DateTime::ATOM);
      $this->any = $any;
    }

    /**
     * @return TrackReference
     */
    public function getTrackToken()
    {
      return $this->TrackToken;
    }

    /**
     * @param TrackReference $TrackToken
     * @return \app\modules\dvr\components\onvif\wsdl\TrackInformation
     */
    public function setTrackToken($TrackToken)
    {
      $this->TrackToken = $TrackToken;
      return $this;
    }

    /**
     * @return TrackType
     */
    public function getTrackType()
    {
      return $this->TrackType;
    }

    /**
     * @param TrackType $TrackType
     * @return \app\modules\dvr\components\onvif\wsdl\TrackInformation
     */
    public function setTrackType($TrackType)
    {
      $this->TrackType = $TrackType;
      return $this;
    }

    /**
     * @return Description
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param Description $Description
     * @return \app\modules\dvr\components\onvif\wsdl\TrackInformation
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDataFrom()
    {
      if ($this->DataFrom == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DataFrom);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DataFrom
     * @return \app\modules\dvr\components\onvif\wsdl\TrackInformation
     */
    public function setDataFrom(\DateTime $DataFrom)
    {
      $this->DataFrom = $DataFrom->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDataTo()
    {
      if ($this->DataTo == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DataTo);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DataTo
     * @return \app\modules\dvr\components\onvif\wsdl\TrackInformation
     */
    public function setDataTo(\DateTime $DataTo)
    {
      $this->DataTo = $DataTo->format(\DateTime::ATOM);
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
     * @return \app\modules\dvr\components\onvif\wsdl\TrackInformation
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
