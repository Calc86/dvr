<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 26.06.14
 * Time: 14:51
 */

require_once __DIR__.'/../config.php';

require_once __DIR__.'/include.php';

date_default_timezone_set('Europe/Moscow');

\system2\EchoLog::getInstance()->put(__FILE__, "test");

$module = $argv[1];
$test = $argv[2];

require_once "./tests/$module/$test.php";
