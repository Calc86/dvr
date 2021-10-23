<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 19.05.14
 * Time: 10:01
 */

namespace system2;

use app\modules\vlc\components\ICam;

/**
 * Изменяет path стрима
 * Class TVReStream
 * @package system2
 */
class TVReStream extends FlvVlcReStream {
    /**
     * @param ICam $cam
     * @param LiveVlcStream $live
     * @param string $streamName
     */
    function __construct(ICam $cam, LiveVlcStream $live, $streamName = 'flv')
    {
        parent::__construct($cam, $live, $streamName);
        $this->path = '1.flv';
    }
}
