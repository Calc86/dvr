<?php

namespace app\modules\dvr\components\vlc;

use app\modules\dvr\components\types\Port;
use app\modules\dvr\components\types\UserID;

/**
 * Привязка управления vlm к нашей системе, системе организаций
 */
class OrgVlm extends Vlm
{
    //protected $org;
    /**
     * @var UserID
     */
    protected $uid;

    /**
     * @param UserID $uid
     */
    public function __construct(UserID $uid)
    {
        $port = HTSTART + $uid->get();
        parent::__construct(new Port($port));
        //$this->org = $org;
        $this->uid = $uid;
    }
}
