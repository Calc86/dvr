<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 29.03.14
 * Time: 20:06
 */
require_once dirname(__FILE__).'/../config.php';

require_once dirname(__FILE__).'/User.php';

require_once dirname(__FILE__).'/dvr/IDVR.php';
require_once dirname(__FILE__).'/dvr/DVR.php';
require_once dirname(__FILE__).'/dvr/Vlc.php';

require_once dirname(__FILE__).'/cam/ICam.php';
require_once dirname(__FILE__).'/cam/ICamCreator.php';
require_once dirname(__FILE__).'/cam/ICamStream.php';
require_once dirname(__FILE__).'/cam/ICamStreamCreator.php';
require_once dirname(__FILE__).'/cam/Cam.php';

require_once dirname(__FILE__).'/cam/mysql/MysqlCamCreator.php';
require_once dirname(__FILE__).'/cam/mysql/MysqlCamStream.php';
require_once dirname(__FILE__).'/cam/mysql/MysqlCamStreamCreator.php';


$dvr = new \system\Vlc(new UserID(1));
$user = new \system\User(new UserID(1), $dvr);

$user->getDvr()->start();
