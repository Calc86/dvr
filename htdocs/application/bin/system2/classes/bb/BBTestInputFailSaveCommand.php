<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 27.06.14
 * Time: 16:44
 */

namespace system2;

/**
 * Class BBTestInputFailSaveCommand
 * @package system2
 */
class BBTestInputFailSaveCommand implements ICommand{
    private $cam;
    private $stream;

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
