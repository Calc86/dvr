<?php

namespace app\modules\dvr\components\vlc;

use app\modules\dvr\components\types\CamID;
use app\modules\dvr\components\types\CamName;
use app\modules\dvr\components\types\CamPrefix;
use app\modules\dvr\components\types\UserID;

/**
 * pref = live|rec|mtn
 */
class CamVlm extends OrgVlm
{
    //protected $cam;
    /**
     * @var CamID
     */
    protected CamID $cid;
    /**
     * @var CamPrefix
     */
    protected CamPrefix $pref;
    /**
     * @var CamName
     */
    protected CamName $full;

    /**
     * @param UserID $uid
     * @param CamID $cid
     * @param CamPrefix $pref
     */
    public function __construct(UserID $uid, CamID $cid, CamPrefix $pref)
    {
        parent::__construct($uid);

        $this->set_cid($cid);
        $this->set_pref($pref);
        $this->full_cam();
    }

    /**
     *
     */
    protected function full_cam()
    {
        //new UID_{uid}__CID_{id}_live broadcast enabled
        $this->full = new CamName("UID_" . $this->uid . "__CID_" . $this->cid . "_" . $this->pref);
    }

    /**
     * @param CamID $cid
     */
    protected function set_cid(CamID $cid)
    {
        $this->cid = $cid;
        //$this->full_url();
    }

    /**
     * @param CamPrefix $pref
     */
    protected function set_pref(CamPrefix $pref)
    {
        $this->pref = $pref;
        //$this->full_url();
    }
}
