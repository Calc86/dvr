<?php

namespace app\modules\dvr\components\onvif\wsdl;

class Description
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var anonymous26 $lang
     */
    protected $lang = null;

    /**
     * @param string $_
     * @param anonymous26 $lang
     */
    public function __construct($_, $lang)
    {
      $this->_ = $_;
      $this->lang = $lang;
    }

    /**
     * @return string
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param string $_
     * @return \app\modules\dvr\components\onvif\wsdl\Description
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return anonymous26
     */
    public function getLang()
    {
      return $this->lang;
    }

    /**
     * @param anonymous26 $lang
     * @return \app\modules\dvr\components\onvif\wsdl\Description
     */
    public function setLang($lang)
    {
      $this->lang = $lang;
      return $this;
    }

}
