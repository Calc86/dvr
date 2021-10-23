<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 12.05.14
 * Time: 14:33
 */

namespace app\modules\dvr\components\interfaces;

/**
 * Поток с камеры (любой, будь то live, запись, либо какие то routine при update
 * Interface ICamStream
 * @package system2
 */
interface ICamStream extends IControlled, ICreate, IDelete{

}
