<?php

namespace app\modules\dvr\components\vlc;

use app\modules\dvr\components\types\CamName;
use app\modules\dvr\components\types\CamPrefix;
use app\modules\dvr\components\types\OrgName;
use app\modules\dvr\components\types\Url;
use app\modules\dvr\components\types\UserID;
use app\modules\dvr\components\types\VLMCommand;
use Exception;
use SimpleXMLElement;

/**
 * TODO 2014**** убрать pref из конструктора, статус формировать по pref и все функции возвращать по pref
 * pref = префикс rec или mtn или live
 */
class OrgStatus extends CamVlm
{
    /**
     * @var string
     */
    protected string $sxml;
    /**
     * @var array
     */
    protected array $status = [];  //[cam][pref]

    /**
     * @param UserID $uid
     * @param OrgName $org
     * @param CamName $cam
     * @param CamPrefix|null $pref
     * @throws Exception
     */
    public function __construct(UserID $uid, OrgName $org, CamName $cam, ?CamPrefix $pref = null)
    {
        if ($pref == null) $pref = new CamPrefix(CamPrefix::LIVE);
        parent::__construct($uid, $org, $cam, $pref);
        $this->set_pref($pref);
        $this->set_url(new Url('requests/vlm.xml'));
        $this->cmd(new VLMCommand(''));
        $this->status = array();

        //парсим
        $this->parse();
    }

    /**
     *
     * @throws Exception
     */
    protected function parse()
    {
        $this->sxml = new SimpleXMLElement($this->message());
        //print_r($this->sxml);

        if (property_exists($this->sxml, 'broadcast')) {
            $cam = array();
            foreach ($this->sxml->broadcast as $bc) {

                //echo $this->full;

                $c_org = '';
                $c_name = '';
                $c_pref = '';

                $a = explode('_', $bc['name']);
                //print_r($a);
                $c_org = $a[0];
                $c_name = $a[1];
                $c_pref = $a[2];

                $cam = $bc;

                foreach ($cam->attributes() as $n => $v) {
                    $this->status[$c_name][$c_pref][$n] = (string)$v;
                }

                foreach ($cam as $n => $v) {
                    switch ($n) {
                        case 'output':
                            $this->status[$c_name][$c_pref][$n] = (string)$v;
                            break;
                        case 'inputs':
                            $this->status[$c_name][$c_pref]['input'] = (string)$v->input;
                            break;
                        case 'instances':
                            $this->status[$c_name][$c_pref]['state'] = (string)$cam->instances->instance['state'];
                            break;
                    }
                }
                if (!isset($this->status[$c_name][$c_pref]['state']))
                    $this->status[$c_name][$c_pref]['state'] = 'stopped';
            }

        }
    }

    /**
     * @param $cam
     * @param $pref
     * @return mixed
     */
    public function status($cam, $pref)
    {
        return $this->status[$cam][$pref];
    }

    /**
     * @param $cam
     * @param $pref
     * @return int
     */
    public function state($cam, $pref): int
    {
        if ($this->status[$cam][$pref]['state'] == 'playing')
            return 1;
        else
            return 0;
    }

    /**
     * @return mixed
     */
    public function xml()
    {
        header("Content-Type: text/xml");
        return $this->message();
    }
}