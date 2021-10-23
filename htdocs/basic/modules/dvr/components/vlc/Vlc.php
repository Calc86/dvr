<?php

namespace app\modules\dvr\components\vlc;

use app\modules\dvr\components\Config;
use app\modules\dvr\components\exceptions\MysqlQueryException;
use app\modules\dvr\components\exceptions\PathException;
use app\modules\dvr\components\mysql\Database;
use app\modules\dvr\components\nas\Nas;
use app\modules\dvr\components\telnet\Telnet;
use app\modules\dvr\components\types\BashCommand;
use app\modules\dvr\components\types\CamID;
use app\modules\dvr\components\types\CamPrefix;
use app\modules\dvr\components\types\IP;
use app\modules\dvr\components\types\Path;
use app\modules\dvr\components\types\Port;
use app\modules\dvr\components\types\UserID;
use app\modules\dvr\components\types\VLMInput;
use app\modules\dvr\components\types\WebProto;
use app\modules\dvr\components\types\YesNo;
use Exception;

/**
 * Class vlc
 * @deprecated Не помню почему, это было (2014) 7 лет назад. :)
 */
class Vlc
{
    /**
     * @var UserID Id пользователя в базе mysql
     */
    protected UserID $uid;
    /**
     * @var array Список рабочих директорий
     */
    protected array $dirs = array();
    /**
     * @var Config Класс для генерации конфиг файлов
     */
    protected $config;
    /**
     * @var Telnet Класс для протокола telnet
     */
    protected Telnet $telnet;
    /**
     * @var string Текстовый конфиг vlm
     */
    protected string $vlm = '';
    /**
     * @var Path
     */
    protected Path $path_vlm;
    /**
     * @var Path proc файл
     */
    protected Path $proc;
    /**
     * @var Path Путь к log файлу
     */
    protected $log = '';
    /**
     * @var Path Путь к config ротации логов
     */
    protected $logrotate = '';
    /**
     * @var Port Порт для управления по telnet протоколу
     */
    protected Port $tl_port;
    /**
     * @var Port Порт для управления по http протоколу
     */
    protected Port $ht_port;

    /**
     * @var array Список объектов выборки из mysql для данного пользователя
     */
    protected array $cams = array();

    /**
     * @var YesNo Динамические камеры или нет
     */
    protected YesNo $dyn;

    /**
     * @param array $cams
     */
    public function setCams(array $cams)
    {
        $this->cams = $cams;
    }

    /**
     * @return array
     */
    public function getCams(): array
    {
        return $this->cams;
    }

    /**
     * @param Config $config
     */
    public function setConfig(Config $config)
    {
        $this->config = $config;
    }

    /**
     * @return Config
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * @param array $dirs
     */
    public function setDirs(array $dirs)
    {
        $this->dirs = $dirs;
    }

    /**
     * @return array
     */
    public function getDirs(): array
    {
        return $this->dirs;
    }

    /**
     * @param YesNo $dyn
     */
    public function setDyn(YesNo $dyn)
    {
        $this->dyn = $dyn;
    }

    /**
     * @return YesNo
     */
    public function getDyn(): YesNo
    {
        return $this->dyn;
    }

    /**
     * @param Port $ht_port
     */
    public function setHtPort(Port $ht_port)
    {
        $this->ht_port = $ht_port;
    }

    /**
     * @return Port
     */
    public function getHtPort(): Port
    {
        return $this->ht_port;
    }

    /**
     * @param Path $log
     */
    public function setLog(Path $log)
    {
        $this->log = $log;
    }

    /**
     * @return Path
     */
    public function getLog()
    {
        return $this->log;
    }

    /**
     * @param Path $logrotate
     */
    public function setLogrotate(Path $logrotate)
    {
        $this->logrotate = $logrotate;
    }

    /**
     * @return Path
     */
    public function getLogrotate()
    {
        return $this->logrotate;
    }

    /**
     * @param Path $proc
     */
    public function setProc(Path $proc)
    {
        $this->proc = $proc;
    }

    /**
     * @return Path
     */
    public function getProc(): Path
    {
        return $this->proc;
    }

    /**
     * @param Telnet $telnet
     */
    public function setTelnet(Telnet $telnet)
    {
        $this->telnet = $telnet;
    }

    /**
     * @return Telnet
     */
    public function getTelnet(): Telnet
    {
        return $this->telnet;
    }

    /**
     * @param Port $tl_port
     */
    public function setTlPort(Port $tl_port)
    {
        $this->tl_port = $tl_port;
    }

    /**
     * @return Port
     */
    public function getTlPort(): Port
    {
        return $this->tl_port;
    }

    /**
     * @param UserID $uid
     */
    public function setUid(UserID $uid)
    {
        $this->uid = $uid;
    }

    /**
     * @return UserID
     */
    public function getUid(): UserID
    {
        return $this->uid;
    }

    /**
     * @param string $vlm
     */
    public function setVlm(string $vlm)
    {
        $this->vlm = $vlm;
    }

    /**
     * @return string
     */
    public function getVlm(): string
    {
        return $this->vlm;
    }
    //вообще мы выходим на полностью динамические камеры

    /**
     * @param UserID $uid
     * @param YesNo|null $dyn
     * @throws MysqlQueryException|PathException
     */
    public function __construct(UserID $uid, ?YesNo $dyn = null)
    {
        $db = Database::getInstance()->getDB();

        if (is_null($dyn)) $dyn = new YesNo(true);
        if (!$uid) die($this->error(__LINE__, " пользователь не указан"));

        $this->setUid($uid);
        $this->setDyn($dyn);
        $this->dirs = array(
            //'bin',
            'etc', 'proc', 'rec', 'mtn', 'log', 'img', 'tmp'
        );

        if (!$this->dyn)
            $this->setVlm($this->config->vlm());

        $this->setPathVlm(new Path(ETC . "/$this->uid/$this->uid.vlm"));
        $this->setProc(new Path(PROC . "/$this->uid/vlc.pid"));
        $this->setLog(new Path(LOG . "/$this->uid/vlc.log"));
        $this->setLogrotate(new Path(ETC . "/$this->uid/logrotate.conf"));
        $this->setHtPort(new Port(HTSTART + $this->getUserID()->get()));
        $this->setTlPort(new Port(TLSTART + $this->getUserID()->get()));

        $this->telnet = new Telnet();
        $this->config = new config($this->uid);

        // если настроек нет, то и не будет камеры в нашем списке
        $q = "select * from cams as c,cam_settings as cs where c.id=cs.cam_id and user_id={$this->uid}";
        $r = $db->query($q);
        if (!$r) throw new MysqlQueryException($q);
        $n = $r->num_rows;

        for ($i = 0; $i < $n; $i++) {
            $cam = $r->fetch_object();
            $this->cams[$cam->cam_id] = $cam;
        }

        //примонтировать NAS
        $this->mount();

        $this->create_user_dirs();
    }

    /**
     * примонтировать наш nas
     */
    public function mount()
    {
        $nas = new Nas();
        $nas->mount();
    }

    /**
     * размонтировать наш nas
     */
    public function un_mount()
    {
        $nas = new Nas();
        $nas->un_mount();
    }

    /**
     * @return UserID
     */
    public function getUserID(): UserID
    {
        return $this->uid;
    }

    /**
     * Функция генерации ошибок
     * @param int $line Номер линии в файле __LINE__
     * @param string $text Текст ошибки
     * @return string
     */
    protected function error(int $line, string $text): string
    {
        return 'ERROR: (' . __FILE__ . ' line:' . $line . ') ' . $text . "\n";
    }

    /**
     * @param CamID $cid
     * @param CamPrefix $pref
     * @param YesNo $debug
     */
    public function create_cam(CamID $cid, CamPrefix $pref, YesNo $debug)
    {

        $cam = $this->cams[$cid->get()];
        $cc = new CamControlArchive($this->uid, $cid, $pref);

        //todo: remove 9000
        $stream_port = new Port($cam->id + VLC_STREAM_PORT_START);
        $input = $cc->gen_input_string(
            new WebProto($cam->live_proto),
            new IP($cam->ip),
            new Port($cam->live_port),
            new Path($cam->live_path)
        );
        $output = $cc->gen_live_string($stream_port, new Path($cam->stream_path));
        $stream = $cc->get_stream_string($stream_port, new Path($cam->stream_path));

        switch ($pref) {
            case CamPrefix::LIVE:
                $cc->create($input, $output);
                break;
            case CamPrefix::RECORD:
                $path = DIR . "/rec/$this->uid";
                $cc->create(new VLMInput($stream), $cc->gen_rec_string($path));
                break;
            case CamPrefix::MOTION:
                $path = DIR . "/mtn/$this->uid";
                $cc->create(new VLMInput($stream), $cc->gen_rec_string($path));
                break;
        }

        if ($debug->get()) {
            var_dump($debug);
            echo "$cam->cam_id $pref\n";
            //входные данные
            echo "Данные камеры\n";
            echo $input . "\n";
            //выходные данные
            echo $output . "\n";
            echo $stream . "\n";
        }
    }

    /**
     * @param CamID $cid
     * @param CamPrefix $pref
     * @param YesNo $debug
     * @throws MysqlQueryException
     */
    public function play_cam(CamID $cid, CamPrefix $pref, YesNo $debug)
    {
        $cam = $this->cams[$cid->get()];
        $cc = new CamControlArchive($this->uid, new CamID($cam->cam_id), $pref);

        switch ($pref) {
            case CamPrefix::LIVE:
                if ($debug->get()) echo "$cam->cam_id live\n";
                if ($cam->live) $cc->play();
                break;
            case CamPrefix::RECORD:
                if ($cam->live && $cam->rec) {
                    if ($debug->get()) echo "$cam->cam_id rec\n";
                    $cc->play();
                }
                break;
            case CamPrefix::MOTION:
                if ($cam->live && $cam->mtn) {
                    if ($debug->get()) echo "$cam->cam_id mtn\n";
                    $cc->play();
                }
                break;
        }
    }

    /**
     * @param CamID $cid
     * @param CamPrefix $pref
     * @param YesNo $debug
     */
    public function delete_cam(CamID $cid, CamPrefix $pref, YesNo $debug)
    {
        $cam = $this->cams[$cid->get()];
        $cc = new CamControlArchive($this->uid, new CamID($cam->cam_id), $pref);

        $cc->delete();
    }

    /**
     * @param CamID $cid
     * @param CamPrefix $pref
     * @param YesNo|null $debug
     * @throws MysqlQueryException
     */
    public function stop_cam(CamID $cid, CamPrefix $pref, ?YesNo $debug = null)
    {
        if ($debug == null) $debug = new YesNo(false);
        $cam = $this->cams[$cid->get()];
        $cc = new CamControlArchive($this->uid, new CamID($cam->cam_id), $pref);

        $cc->stop();
    }

    /**
     * Запуск unix процесса
     * @throws PathException
     * @throws MysqlQueryException
     */
    public function start()
    {
        $this->create_user_dirs();

        if ($this->dyn) {
            $vlc_vlm = '';
        } else {
            $vlc_vlm_path = ETC . "/$this->uid/$this->uid.vlm";
            $vlc_vlm = "--vlm-conf $vlc_vlm_path";
        }

        $vlc_ifs = "-I http --http-host " . LIVEHOST . " --http-port $this->ht_port -I telnet --telnet-port $this->tl_port  --telnet-password " . TLPWD;
        $vlc_logs = "--extraintf=http:logger --file-logging --log-verbose 0 --logfile $this->log";
        $vlc_shell = VLCBIN . " --ffmpeg-hw --http-reconnect --http-continuous --sout-keep " . VLCD . " $vlc_ifs  --repeat --loop --network-caching " . VLCNETCACHE . " --sout-mux-caching " . VLCSOUTCACHE . " $vlc_vlm --pidfile $this->proc $vlc_logs \n";

        //перезапись config файлов
        {
            if (!$this->dyn) {
                //перезапишем наш конфиг
                $f = fopen($this->path_vlm, "w+");
                fwrite($f, $this->vlm);
                fclose($f);
            }
            //запишем logrotate
            $f = fopen($this->logrotate, "w+");
            fwrite($f, $this->config->logrotate());
            fclose($f);
        }


        //старт vlc
        if (is_file($this->proc)) {
            echo $this->error(__LINE__, "VLC для пользователя $this->uid уже запущен или мертв");
        } else {
            echo "vlc: $vlc_shell\n";   //команда запуска
            (new BashCommand($vlc_shell))->exec();

            //todo: сделать проверку на успешный старт unix процесса
            if ($this->dyn) {
                $this->wait_for_unix_proc_start();
                //динамически добавить наши камеры
                echo "Динамическое добавление\n";
                foreach ($this->cams as $cam) {
                    $this->create_cam(new CamID($cam->cam_id), new CamPrefix(CamPrefix::LIVE), new YesNo(true));
                    $this->create_cam(new CamID($cam->cam_id), new CamPrefix(CamPrefix::RECORD), new YesNo(true));
                    $this->create_cam(new CamID($cam->cam_id), new CamPrefix(CamPrefix::MOTION), new YesNo(true));

                    $this->play_cam(new CamID($cam->cam_id), new CamPrefix(CamPrefix::LIVE), new YesNo(true));
                    $this->play_cam(new CamID($cam->cam_id), new CamPrefix(CamPrefix::RECORD), new YesNo(true));
                }
            }
        }
    }

    /**
     * Ждем 1 секунду пока запустится процесс vlc
     */
    protected function wait_for_unix_proc_start()
    {
        sleep(1);
    }

    /**
     * Shutdown процесса через telnet
     */
    public function stop()
    {
        $f = $this->telnet->connect('localhost', $this->tl_port->get());
        if (!$f) {
            echo "Порт закрыт \n";
        } else {
            echo "Успешное подключение \n";
            $this->telnet->auth(TLPWD);
            $this->telnet->write('shutdown');
            echo $this->telnet->read();
            sleep(3);
        }
    }

    /**
     * Собрать статус
     */
    public function status()
    {
        $ret = '';
        if (is_file($this->proc)) {
            $ret .= "PROC файл на месте \n";
        }
        $ps = "ps -aef | grep vlc | grep /proc/$this->uid | grep -v grep ";
        //echo $ps;
        $status = shell_exec($ps);
        if ($status == '') $ret .= "Оно мертво\n";
        else
            $ret .= $status;
        echo $ret;
    }

    /**
     * Запущен ли vlc
     * @return int
     */
    public function is_run(): int
    {
        $ret = '';
        if (is_file($this->proc)) {
            $ret .= "PROC файл на месте \n";
        }
        $ps = "ps -aef | grep vlc | grep /proc/$this->uid | grep -v grep ";
        //echo $ps;
        $status = shell_exec($ps);

        if ($status == '') return 0;
        else return 1;
    }

    /**
     * Перезапустить vlc процесс
     */
    public function restart()
    {
        $this->stop();
        $this->start();
    }

    /**
     * Удалить proc файл
     */
    public function del_proc()
    {
        if (is_file($this->proc)) unlink($this->proc);
    }

    /**
     * Убить процесс, если не указан процесс, то ищем проц файл по id пользователя
     * @param int $proc Id unix процесса
     */
    public function kill(int $proc = 0)
    {
        if (!$proc) {
            if (is_file($this->proc)) {
                $kill = "kill `cat $this->proc`";
                (new BashCommand($kill))->exec();
                $this->del_proc();
            } else {
                echo "файл $this->proc не найден, если процесс запущен, то его нужно искать в процесс листе\n";
            }
        } else {
            $kill = "kill $proc";
            (new BashCommand($kill))->exec();
            $this->del_proc();
        }
        sleep(1);
    }

    /**
     * Найти через grep в процесс листах наш процесс по id пользователя
     * @return int Id unix процесса
     */
    public function ps_get_proc(): int
    {
        $ps = "ps -aef | grep vlc | grep /proc/$this->uid | grep -v grep | awk ' {print $2} '";
        return (int)shell_exec($ps);
    }

    /**
     * Убить процесс по id пользователя, ищет по процесс листу в системе
     */
    public function ps_kill()
    {
        $proc = $this->ps_get_proc();
        $this->kill($proc);
    }

    /**
     * Создать рабочие директории, если их нет
     * @throws PathException
     */
    public function create_user_dirs()
    {
        foreach ($this->dirs as $dir) {
            $path = DIR . "/$dir/" . $this->getUserID();
            if (!is_dir($path)) {
                try {
                    mkdir($path, 0775);
                } catch (Exception $e) {
                    throw new PathException($path);
                }
            }
        }
    }

    /**
     * Проверить папки на факт монтирования
     * @return bool
     */
    public function is_mounted(): bool
    {
        // etc mtab
        //todo: организовать проверку
        return true;
    }

    /**
     * @return Path
     */
    public function getPathVlm(): Path
    {
        return $this->path_vlm;
    }

    /**
     * @param Path $path_vlm
     */
    public function setPathVlm(Path $path_vlm)
    {
        $this->path_vlm = $path_vlm;
    }
}