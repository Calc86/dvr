<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 31.03.14
 * Time: 12:35
 */

require_once dirname(__FILE__).'/Log.php';
require_once dirname(__FILE__).'/log/EchoLog.php';
require_once dirname(__FILE__).'/System.php';
require_once dirname(__FILE__).'/FileSystem.php';
require_once dirname(__FILE__).'/User.php';

require_once dirname(__FILE__).'/Daemon.php';

require_once dirname(__FILE__).'/cam/CamMotion.php';

require_once dirname(__FILE__).'/cam/mysql/MysqlCamMotion.php';

require_once dirname(__FILE__).'/motion/Motion.php';
require_once dirname(__FILE__).'/motion/MotionConfig.php';
require_once dirname(__FILE__).'/motion/MotionHttp.php';

require_once dirname(__FILE__).'/dvr/IDVR.php';
require_once dirname(__FILE__).'/dvr/DVR.php';
require_once dirname(__FILE__).'/dvr/Vlc.php';
require_once dirname(__FILE__).'/dvr/MotionVlc.php';

require_once dirname(__FILE__).'/cam/ICam.php';
require_once dirname(__FILE__).'/cam/ICamCreator.php';
require_once dirname(__FILE__).'/cam/ICamStream.php';
require_once dirname(__FILE__).'/cam/ICamStreamCreator.php';
require_once dirname(__FILE__).'/cam/Cam.php';
require_once dirname(__FILE__).'/cam/CamCreator.php';
require_once dirname(__FILE__).'/cam/CamStreamCreator.php';
require_once dirname(__FILE__).'/cam/CamStream.php';

require_once dirname(__FILE__).'/cam/mysql/MysqlCam.php';
require_once dirname(__FILE__).'/cam/mysql/MysqlCamCreator.php';
require_once dirname(__FILE__).'/cam/mysql/MysqlCamStream.php';
require_once dirname(__FILE__).'/cam/mysql/MysqlCamStreamCreator.php';

require_once dirname(__FILE__).'/cam/file/FileCam.php';
require_once dirname(__FILE__).'/cam/file/FileCamCreator.php';
//require_once dirname(__FILE__).'/cam/file/FileCamStream.php';
require_once dirname(__FILE__).'/cam/file/FileCamStreamCreator.php';
