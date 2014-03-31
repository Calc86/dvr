<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 31.03.14
 * Time: 12:35
 */

require_once dirname(__FILE__).'/System.php';
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
