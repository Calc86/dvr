<?php

namespace app\modules\dvr\components\onvif\wsdl;

class RecordingSourceInformation
{

    /**
     * @var anyURI $SourceId
     */
    protected $SourceId = null;

    /**
     * @var Name $Name
     */
    protected $Name = null;

    /**
     * @var Description $Location
     */
    protected $Location = null;

    /**
     * @var Description $Description
     */
    protected $Description = null;

    /**
     * @var anyURI $Address
     */
    protected $Address = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param anyURI $SourceId
     * @param Name $Name
     * @param Description $Location
     * @param Description $Description
     * @param anyURI $Address
     * @param string $any
     */
    public function __construct($SourceId, $Name, $Location, $Description, $Address, $any)
    {
      $this->SourceId = $SourceId;
      $this->Name = $Name;
      $this->Location = $Location;
      $this->Description = $Description;
      $this->Address = $Address;
      $this->any = $any;
    }

    /**
     * @return anyURI
     */
    public function getSourceId()
    {
      return $this->SourceId;
    }

    /**
     * @param anyURI $SourceId
     * @return \app\modules\dvr\components\onvif\wsdl\RecordingSourceInformation
     */
    public function setSourceId($SourceId)
    {
      $this->SourceId = $SourceId;
      return $this;
    }

    /**
     * @return Name
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param Name $Name
     * @return \app\modules\dvr\components\onvif\wsdl\RecordingSourceInformation
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return Description
     */
    public function getLocation()
    {
      return $this->Location;
    }

    /**
     * @param Description $Location
     * @return \app\modules\dvr\components\onvif\wsdl\RecordingSourceInformation
     */
    public function setLocation($Location)
    {
      $this->Location = $Location;
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
     * @return \app\modules\dvr\components\onvif\wsdl\RecordingSourceInformation
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param anyURI $Address
     * @return \app\modules\dvr\components\onvif\wsdl\RecordingSourceInformation
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
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
     * @return \app\modules\dvr\components\onvif\wsdl\RecordingSourceInformation
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
