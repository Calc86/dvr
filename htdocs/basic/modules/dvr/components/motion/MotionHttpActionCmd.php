<?php

namespace app\modules\dvr\components\motion;

/**
 * Class MotionHttpActionCmd
 * @package system
 * http://www.lavrsen.dk/foswiki/bin/view/Motion/MotionHttpAPI#Action_Commands
 */
class MotionHttpActionCmd
{
    const COMMAND = "action";
    const MAKE_MOVIE = "makemovie";
    const SNAPSHOT = "snapshot";
    const RESTART = "restart";
    const QUIT = "quit";
}