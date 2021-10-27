<?php

namespace app\modules\dvr\components\onvif\wsdl;

class faultreason
{

    /**
     * @var reasontext[] $Text
     */
    protected $Text = null;

    /**
     * @param reasontext[] $Text
     */
    public function __construct(array $Text)
    {
      $this->Text = $Text;
    }

    /**
     * @return reasontext[]
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param reasontext[] $Text
     * @return \app\modules\dvr\components\onvif\wsdl\faultreason
     */
    public function setText(array $Text)
    {
      $this->Text = $Text;
      return $this;
    }

}
