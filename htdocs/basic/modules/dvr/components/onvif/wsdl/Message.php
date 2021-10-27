<?php

namespace app\modules\dvr\components\onvif\wsdl;

class Message
{

    /**
     * @var ItemList $Source
     */
    protected $Source = null;

    /**
     * @var ItemList $Key
     */
    protected $Key = null;

    /**
     * @var ItemList $Data
     */
    protected $Data = null;

    /**
     * @var MessageExtension $Extension
     */
    protected $Extension = null;

    /**
     * @var \DateTime $UtcTime
     */
    protected $UtcTime = null;

    /**
     * @var PropertyOperation $PropertyOperation
     */
    protected $PropertyOperation = null;

    /**
     * @param ItemList $Source
     * @param ItemList $Key
     * @param ItemList $Data
     * @param MessageExtension $Extension
     * @param \DateTime $UtcTime
     * @param PropertyOperation $PropertyOperation
     */
    public function __construct($Source, $Key, $Data, $Extension, \DateTime $UtcTime, $PropertyOperation)
    {
      $this->Source = $Source;
      $this->Key = $Key;
      $this->Data = $Data;
      $this->Extension = $Extension;
      $this->UtcTime = $UtcTime->format(\DateTime::ATOM);
      $this->PropertyOperation = $PropertyOperation;
    }

    /**
     * @return ItemList
     */
    public function getSource()
    {
      return $this->Source;
    }

    /**
     * @param ItemList $Source
     * @return \app\modules\dvr\components\onvif\wsdl\Message
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

    /**
     * @return ItemList
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param ItemList $Key
     * @return \app\modules\dvr\components\onvif\wsdl\Message
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return ItemList
     */
    public function getData()
    {
      return $this->Data;
    }

    /**
     * @param ItemList $Data
     * @return \app\modules\dvr\components\onvif\wsdl\Message
     */
    public function setData($Data)
    {
      $this->Data = $Data;
      return $this;
    }

    /**
     * @return MessageExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param MessageExtension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\Message
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUtcTime()
    {
      if ($this->UtcTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->UtcTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $UtcTime
     * @return \app\modules\dvr\components\onvif\wsdl\Message
     */
    public function setUtcTime(\DateTime $UtcTime)
    {
      $this->UtcTime = $UtcTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return PropertyOperation
     */
    public function getPropertyOperation()
    {
      return $this->PropertyOperation;
    }

    /**
     * @param PropertyOperation $PropertyOperation
     * @return \app\modules\dvr\components\onvif\wsdl\Message
     */
    public function setPropertyOperation($PropertyOperation)
    {
      $this->PropertyOperation = $PropertyOperation;
      return $this;
    }

}
