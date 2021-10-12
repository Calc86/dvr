<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 26.06.14
 * Time: 14:52
 */

namespace system2;

$timelapse = new CreateTimelapsCommand(1, Path::getTmpfsPath(Path::IMAGE.'/testpath'));
$timelapse->execute();
echo 'path:'.realpath($timelapse->getPath()."/../").$timelapse->getFileName();
echo "\n";
print_r($timelapse);
