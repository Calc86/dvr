<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 23.04.14
 * Time: 19:17
 */

print_r($_GET);

//$time  = time() + EXPIRE_TTL; # = TIMESTAMP
$time = 1400000000;
$hash = md5($time.'55308', true);
$hash = strtr( base64_encode($hash), array( '+' => '-', '/' => '_', '=' => '' ));

echo $hash;
