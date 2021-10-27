<?php

namespace app\modules\dvr\components\onvif\wsdl;

class ConfigDescription extends MessageDescription
{

    /**
     * @var ItemListDescription $Parameters
     */
    protected $Parameters = null;

    /**
     * @var Messages[] $Messages
     */
    protected $Messages = null;

    /**
     * @var ConfigDescriptionExtension $Extension
     */
    protected $Extension = null;

    /**
     * @var QName $Name
     */
    protected $Name = null;

    /**
     * @var boolean $fixed
     */
    protected $fixed = null;

    /**
     * @var int $maxInstances
     */
    protected $maxInstances = null;

    /**
     * @param boolean $IsProperty
     * @param ItemListDescription $Parameters
     * @param QName $Name
     * @param boolean $fixed
     * @param int $maxInstances
     */
    public function __construct($IsProperty, $Parameters, $Name, $fixed, $maxInstances)
    {
      parent::__construct($IsProperty);
      $this->Parameters = $Parameters;
      $this->Name = $Name;
      $this->fixed = $fixed;
      $this->maxInstances = $maxInstances;
    }

    /**
     * @return ItemListDescription
     */
    public function getParameters()
    {
      return $this->Parameters;
    }

    /**
     * @param ItemListDescription $Parameters
     * @return \app\modules\dvr\components\onvif\wsdl\ConfigDescription
     */
    public function setParameters($Parameters)
    {
      $this->Parameters = $Parameters;
      return $this;
    }

    /**
     * @return Messages[]
     */
    public function getMessages()
    {
      return $this->Messages;
    }

    /**
     * @param Messages[] $Messages
     * @return \app\modules\dvr\components\onvif\wsdl\ConfigDescription
     */
    public function setMessages(array $Messages = null)
    {
      $this->Messages = $Messages;
      return $this;
    }

    /**
     * @return ConfigDescriptionExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param ConfigDescriptionExtension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\ConfigDescription
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

    /**
     * @return QName
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param QName $Name
     * @return \app\modules\dvr\components\onvif\wsdl\ConfigDescription
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFixed()
    {
      return $this->fixed;
    }

    /**
     * @param boolean $fixed
     * @return \app\modules\dvr\components\onvif\wsdl\ConfigDescription
     */
    public function setFixed($fixed)
    {
      $this->fixed = $fixed;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxInstances()
    {
      return $this->maxInstances;
    }

    /**
     * @param int $maxInstances
     * @return \app\modules\dvr\components\onvif\wsdl\ConfigDescription
     */
    public function setMaxInstances($maxInstances)
    {
      $this->maxInstances = $maxInstances;
      return $this;
    }

}
