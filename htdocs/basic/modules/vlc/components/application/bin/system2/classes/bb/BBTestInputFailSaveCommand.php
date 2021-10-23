<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 27.06.14
 * Time: 16:44
 */

namespace system2;

use app\modules\vlc\components\ICam;
use app\modules\vlc\components\ICamStream;
use app\modules\vlc\components\ICommand;

/**
 * Class BBTestInputFailSaveCommand
 * @package system2
 */
class BBTestInputFailSaveCommand implements ICommand
{
    private ICam $cam;
    private ICamStream $stream;

    /**
     * @param ICam $cam
     * @param ICamStream $stream
     */
    function __construct(ICam $cam, ICamStream $stream)
    {
        $this->cam = $cam;
        $this->stream = $stream;
    }

    /**
     * @return void
     */
    public function execute()
    {
        $e = new bb\Events(0, bb\Events::TEST_INPUT_FAIL);
        $e->user_id = $this->cam->getDVR()->getUser()->getID();
        $e->cam_id = $this->cam->getID();
        $e->comment = get_class($this->stream);

        $e->save();
    }
}
