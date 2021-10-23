<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 07.04.14
 * Time: 17:41
 */

namespace system;

use app\modules\dvr\components\IUser;
use app\modules\dvr\components\Log;
use app\modules\dvr\types\BashCommand;
use app\modules\dvr\types\UserID;

/**
 * Class Motion
 * @package system
 * @deprecated
 */
class Motion extends Daemon {

    /**
     * @var array of CamMotion
     */
    private array $camMotions = [];

    /**
     * @var UserID
     */
    private $uid;

    function __construct(IUser $user)
    {
        $this->uid = $user->getID();
        parent::__construct($this->uid, "motion");
    }

    /**
     * Добавить камеру
     * @param CamMotion $camMotion
     */
    public function addThread(CamMotion $camMotion){
        $this->camMotions[] = $camMotion;
    }

    private function writeConfig(){
        $motionTemplatePath = ETC."/templates/motion.conf";
        $threadTemplatePath = ETC."/templates/thread.conf";
        $config = file_get_contents($motionTemplatePath);
        $thread = file_get_contents($threadTemplatePath);

        $threads = "";
        foreach($this->camMotions as $cam){
            /** @var CamMotion $cam */
            //$targetDir = realpath(TMP."/".$this->getUid()."/".$this->ge);
            //$cam->addConfig('target_dir',$targetDir);

            $threadPath = dirname($this->getConfigFile())."/thread_".$cam->getCamID().".conf";
            $threads.= "thread ".$threadPath."\n";
            $f = fopen($threadPath, "w+");
            fwrite($f, MotionConfig::parseConfig(
                $thread,
                array_merge(
                    $cam->getConfig(),
                    array(
                        MotionHttpConfigCmd::P_STREAM_PORT => MOTION_STREAM_PORT + $cam->getCamID()->get(),
                        MotionHttpConfigCmd::P_STREAM_LOCALHOST => MOTION_STREAM_LOCALHOST
                    )
                )
            ));
            fclose($f);
        }

        $settings = array(
            'threads' => $threads,
            'target_dir' => IMG."/".$this->getUid(),
        );

        // Global options
        $settings['webcontrol_port'] = MOTION_HTTP_PORT + $this->uid->get();
        $settings['webcontrol_localhost'] = MOTION_HTTP_LOCALHOST;
        $settings['webcontrol_html_output'] = MOTION_HTTP_HTML;
        $settings['webcontrol_authentication'] = MOTION_HTTP_USER.":".MOTION_HTTP_PASS;

        $f = fopen($this->getConfigFile(), "w+");
        fwrite($f, MotionConfig::parseConfig($config, $settings));
        fclose($f);
    }

    public function start()
    {
        $this->writeConfig();
        $this->startMotion();
    }

    private function startMotion(){
        if($this->isStarted()){
            Log::getInstance()->put($this->error(__LINE__, $this->getName()." для пользователя {$this->getUid()} уже запущен или мертв"), __CLASS__);
            return;
        }
        if(MOTION_USE_LOG)
            $log = "-l {$this->getLogFile()}";
        else
            $log = '-l /dev/null';

        $shell = "motion -c {$this->getConfigFile()} -p {$this->getPidFile()} $log";
        Log::getInstance()->put($shell, __CLASS__);
        (new BashCommand($shell))->exec();
    }

    public function stop()
    {
        if(!$this->isStarted()) return;
        $this->kill();  //он автоматом обрабатывает kill
        while($this->isStarted()){
            sleep(1);
        }
    }
}
