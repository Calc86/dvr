<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 14.05.14
 * Time: 18:55
 */

namespace app\modules\vlc\components\vlc2;

use app\modules\vlc\components\ICam;

/**
 * Получает выход с live vlc потока (локальный)
 * Class VlcReStream
 * @package system2
 */
abstract class VlcReStream extends VlcStream
{

    /**
     * @var LiveVlcStream
     */
    protected LiveVlcStream $live;

    /**
     * @param ICam $cam
     * @param $streamName
     * @param LiveVlcStream $live
     */
    function __construct(ICam $cam, LiveVlcStream $live, $streamName)
    {
        parent::__construct($cam, $streamName);
        $this->live = $live;
    }

    /**
     * @return string
     */
    protected function getInputVlm()
    {
        return $this->live->getOutUrl();
    }
}
