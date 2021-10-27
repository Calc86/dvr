<?php

namespace app\modules\dvr\components\onvif\wsdl;

class CellLayout
{

    /**
     * @var Transformation $Transformation
     */
    protected $Transformation = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var int $Columns
     */
    protected $Columns = null;

    /**
     * @var int $Rows
     */
    protected $Rows = null;

    /**
     * @param Transformation $Transformation
     * @param string $any
     * @param int $Columns
     * @param int $Rows
     */
    public function __construct($Transformation, $any, $Columns, $Rows)
    {
      $this->Transformation = $Transformation;
      $this->any = $any;
      $this->Columns = $Columns;
      $this->Rows = $Rows;
    }

    /**
     * @return Transformation
     */
    public function getTransformation()
    {
      return $this->Transformation;
    }

    /**
     * @param Transformation $Transformation
     * @return \app\modules\dvr\components\onvif\wsdl\CellLayout
     */
    public function setTransformation($Transformation)
    {
      $this->Transformation = $Transformation;
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
     * @return \app\modules\dvr\components\onvif\wsdl\CellLayout
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return int
     */
    public function getColumns()
    {
      return $this->Columns;
    }

    /**
     * @param int $Columns
     * @return \app\modules\dvr\components\onvif\wsdl\CellLayout
     */
    public function setColumns($Columns)
    {
      $this->Columns = $Columns;
      return $this;
    }

    /**
     * @return int
     */
    public function getRows()
    {
      return $this->Rows;
    }

    /**
     * @param int $Rows
     * @return \app\modules\dvr\components\onvif\wsdl\CellLayout
     */
    public function setRows($Rows)
    {
      $this->Rows = $Rows;
      return $this;
    }

}
