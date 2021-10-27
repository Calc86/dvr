<?php

namespace app\modules\dvr\components\onvif\wsdl;

class ColorOptions
{

    /**
     * @var Color[] $ColorList
     */
    protected $ColorList = null;

    /**
     * @var ColorspaceRange[] $ColorspaceRange
     */
    protected $ColorspaceRange = null;

    /**
     * @param Color[] $ColorList
     * @param ColorspaceRange[] $ColorspaceRange
     */
    public function __construct(array $ColorList, array $ColorspaceRange)
    {
      $this->ColorList = $ColorList;
      $this->ColorspaceRange = $ColorspaceRange;
    }

    /**
     * @return Color[]
     */
    public function getColorList()
    {
      return $this->ColorList;
    }

    /**
     * @param Color[] $ColorList
     * @return \app\modules\dvr\components\onvif\wsdl\ColorOptions
     */
    public function setColorList(array $ColorList)
    {
      $this->ColorList = $ColorList;
      return $this;
    }

    /**
     * @return ColorspaceRange[]
     */
    public function getColorspaceRange()
    {
      return $this->ColorspaceRange;
    }

    /**
     * @param ColorspaceRange[] $ColorspaceRange
     * @return \app\modules\dvr\components\onvif\wsdl\ColorOptions
     */
    public function setColorspaceRange(array $ColorspaceRange)
    {
      $this->ColorspaceRange = $ColorspaceRange;
      return $this;
    }

}
