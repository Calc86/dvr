<?php
/*
new ruben_cam1_live broadcast enabled
setup ruben_cam1_live input "rtsp://10.112.249.47:10001/live/ch00_0"
setup ruben_cam1_live output http-reconnect
setup ruben_cam1_live output http-continious
setup ruben_cam1_live output #std{access=http{mime=multipart/x-mixed-replace;boundary=--myboundary},mux=ts,dst=*:9001}
control ruben_cam1_live play
 */

// абстрактный класс для работы с http у влц
/**
 * Class vlc_http
 */
class vlc_http{
    /**
     * @var int
     */
    protected $debug = 0;
    /**
     * @var string
     */
    protected $msg;
    /**
     * @var string
     */
    protected $ip;
    /**
     * @var var int
     */
    protected $port;
    /**
     * @var var string
     */
    protected $url;
    /**
     * @var var string
     */
    protected $full_url;

    /**
     * @param int $port
     * @param string $url
     */
    public function __construct($port,$url) {
        $this->ip = LIVEHOST;
        $this->port = $port;
        $this->set_url($url);
        //$this->full_url();
        //print_r($this);
    }

    /**
     * @param string $url
     */
    protected function set_url($url) {
        $this->url = $url;
        $this->full_url();
    }

    /**
     *
     */
    protected function full_url() {
        $this->full_url = "http://$this->ip:$this->port/$this->url";
    }

    /**
     * @param string $cmd
     */
    protected function cmd($cmd) {
        $this->msg = '';
        $path = $this->full_url.rawurlencode(trim($cmd));
        if($this->debug) echo $path;
        @$f = fopen($path,"r");
        if($f){
            while ($buf=fread($f, 1024)){
                $this->msg.=$buf;
            }
            fclose($f);
        }
    }
}

//все комманды это vlm инструкции
//$cam полное имя камеры: UID_{uid}__CID_{id}_live
/**
 * Class vlm
 */
class vlm extends vlc_http{
    /**
     * @param int $port
     */
    public function __construct($port) {
        parent::__construct($port, 'requests/vlm_cmd.xml?command=');
    }

    /**
     * @param string $cam
     */
    public function _new($cam) {
        $this->cmd("new $cam broadcast enabled loop");
    }

    /**
     * @param string $cam
     * @param string $cmd
     * @param int $io
     */
    public function _setup($cam, $cmd,$io=1) {
        $direction = '';
        switch ($io) {
            case 0:
                $direction = 'input';
                //$this->cmd("setup $cam input \"$cmd\"");
                break;
            case 1:
            default:
                $direction = 'output';
                //$this->cmd("setup $cam output $cmd");
                break;
        }
        $cmd = "setup $cam $direction $cmd";
        //echo $cmd;
        $this->cmd($cmd);
    }

    /**
     * @param string $cam
     * @param string $cmd
     */
    public function _control($cam,$cmd) {
        $this->cmd("control $cam $cmd");
    }

    /**
     * @param string $cam
     */
    public function _show($cam) {
        $this->cmd("show $cam");
    }

    /**
     * @param string $cam
     */
    public function _del($cam) {
        $this->cmd("del $cam");
    }

    /**
     * @return string
     */
    public function message() {
        return $this->msg;
    }
}

//привязка управления vlm к нашей системе, системе организаций
/**
 * Class org_vlm
 */
class org_vlm extends vlm{
    //protected $org;
    /**
     * @var int
     */
    protected $uid;

    /**
     * @param int $uid
     */
    public function __construct($uid) {
        $port = HTSTART+$uid;
        parent::__construct($port);
        //$this->org = $org;
        $this->uid = $uid;
    }
}


//pref = live|rec|mtn
/**
 * Class cam_vlm
 */
class cam_vlm extends org_vlm{
    //protected $cam;
    /**
     * @var int
     */
    protected $cid;
    /**
     * @var string
     */
    protected $pref;
    /**
     * @var string
     */
    protected $full;

    /**
     * @param $uid
     * @param $cid
     * @param $pref
     */
    public function __construct($uid, $cid, $pref) {
        parent::__construct($uid);
        
        $this->set_cid($cid);
        $this->set_pref($pref);
        $this->full_cam();
    }

    /**
     *
     */
    protected function full_cam() {
        //new UID_{uid}__CID_{id}_live broadcast enabled
        $this->full = "UID_".$this->uid."__CID_".$this->cid."_".$this->pref;
        //$this->full = $this->org.'_'.$this->cam.'_'.$this->pref;
    }

    /**
     * @param int $cid
     */
    protected function set_cid($cid) {
        $this->cid = $cid;
        //$this->full_url();
    }

    /**
     * @param string $pref
     */
    protected function set_pref($pref) {
        $this->pref = $pref;
        //$this->full_url();
    }
}

/**
 * Class cam_control
 */
class cam_control extends cam_vlm{
    //protected $org;
    //protected $cam;
    //protected $pref;
    //protected $full;

    /**
     * @var string
     */
    protected $filename;    //путь к записываемому файлу

    /**
     * @param int $uid
     * @param int $cid
     * @param string $pref
     */
    public function __construct($uid,$cid,$pref='live') {
        parent::__construct($uid, $cid, $pref);
    }
    
    /**
     * Динамически создает камеру
     * @param string $input
     * @param string $output
     */
    public function create($input,$output) {
        $this->_new($this->full);   //new UID_{uid}__CID_{id}_live broadcast enabled loop
        $this->_setup($this->full, $input, 0);  //setup UID_{uid}__CID_{id}_live input "{source-proto}://{cam-ip}:{source-port}/{source-path}"
        $this->_setup($this->full, $output);    //setup UID_{uid}__CID_{id}_live output #std{access=http{mime=video/mp4},mux=ts,dst=*:{stream-port}/{stream-path}.mp4}
    }

    /**
     * @param int $port
     * @param string $path
     * @return string
     */
    public function get_stream_string($port,$path) {
        //"http://localhost:{stream-port}/{stream-path}.mp4"
        $ret = "http://localhost:$port/$path.mp4";
        return $ret;
    }

    /**
     * @param string $proto
     * @param string $ip
     * @param int $port
     * @param string $path
     * @return string
     */
    public function gen_input_string($proto,$ip,$port,$path) {
        $ret = "$proto://$ip:$port/$path";
        return $ret;
    }

    /**
     * @param int $port
     * @param string $path
     * @return string
     */
    public function gen_live_string($port,$path) {
        $ret = "#std{access=http{mime=video/mp4},mux=ts{use-key-frame,pcr=100,dts-delay=100},dst=*:$port/$path.mp4}";
        //$ret = "#transcode{venc=ffmpeg{codec=copy,fflags=+genpts}:std{access=http{mime=video/mp4},mux=ts,dst=*:$port/$path.mp4}";
        //$ret = "#std{access=http{mime=video/mp4},mux=ts{dts-delay=100},dst=*:$port/$path.mp4}";
        //$ret = "#std{access=http{mime=video/mp4},mux=ts,dst=*:$port/$path.mp4}";
        return $ret;
    }

    /**
     * @param int $port
     * @param string $path
     */
    public function gen_rtmp_string($port,$path){
        $ret = "#transcode{venc=ffmpeg{keyint=1}}:std{access=http{mime=video/mp4},mux=ts,dst=*:$port/1$path";
    }

    /**
     * @param string $path
     * @return string
     */
    public function gen_rec_string($path) {
        $ret = "#std{access=file,mux=ts,dst=$path/rec.avi}";
        return $ret;
    }

    /**
     *
     */
    public function delete() {
        $this->_del($this->full);
    }

    /**
     * @param int $new_file
     */
    public function play($new_file=1) {
        //echo "PLAY: $this->full\n";
        //todo: Запет запуска, если камера уже "вещает"
        switch($this->pref){
            case 'rec':
            case 'mtn':
                //send "output #std{access=file,mux=ts,dst=/home/calc/vlc/$pref/$org/$date/$full.avi}"
                //берем текущее время
                $date = date("Y-m-d");
                $time = date("H_i_s");
                
                //$path = "/home/calc/vlc/$this->pref/$this->org/$date";
                //создаем папочку с сегодняшним числом
                $path = DIR."/$this->pref/$this->uid/$date";
                if(!file_exists($path)){
                    mkdir($path);
                }
                
                //используем время в имени файла
                $this->filename = $path.'/'.$time.'_'.$this->full;
                $cmd = "#std{access=file,mux=ts,dst=$this->filename.avi}";
                //echo $cmd;
                if($new_file) $this->_setup($this->full, $cmd);
                $this->_control($this->full, 'play');

                break;
            case 'live':
            default:
                $this->_control($this->full, 'play');
                break;
        }
    }

    /**
     *
     */
    public function stop() {
        //echo "STOP: $this->full\n";   !!! не должно быть ни каких echo!!!
        $this->_control($this->full, 'stop');
    }

    /**
     * @return string
     */
    public function show() {
        $this->_show($this->full);
        return $this->message();
    }
}

/**
 * Class cam_control_archive
 */
class cam_control_archive extends cam_control{

    /**
     * @param int $uid
     * @param int $cid
     * @param string $pref
     */
    public function __construct($uid,$cid,$pref='live') {
        parent::__construct($uid, $cid, $pref);
    }


    /**
     * @param int $new_file
     */
    public function play($new_file=1){
        parent::play($new_file);

        if($new_file){
            switch($this->pref){
                case 'rec':
                case 'mtn':
                    // занести информацию о нашем файле в базу
                    $now = time();
                    $q_arc = "insert into archive values(0, $this->cid, '$this->pref', $now, 0, 0, 0, 'busy', 0, '$this->filename')";
                    // если запусать vlc.control, то тут нет подключения к бд... нужно думать.
                    $db = open_db(MYHOST, MYUSER, MYPASS, MYDB);
                    mysql_query($q_arc);
                    mysql_close($db);

                    break;
            }
        }
    }

    /**
     *
     */
    public function stop(){
        // узнать, велась ли запись по данному файлику или нет.
        parent::stop();

        if($this->pref=='rec'){
            $db = open_db(MYHOST, MYUSER, MYPASS, MYDB);
            //$q = "select max(id) from archive where cam_id=$this->cid and type='$this->pref'";
            $q = "select id,file from archive where cam_id=$this->cid and type='$this->pref' order by id desc limit 1";
            $r = mysql_query($q);

            if($r){
                $now = time();
                $row = mysql_fetch_row($r);
                $id = $row[0];
                $file = $row[1];
                $qu = "update archive set date_end=$now, rebuilded='no' where id=$id limit 1";

                $r = mysql_query($qu);
                if(!$r){
                    //todo: Какая то ошибка
                }
            }else{
                //todo: Возникла какая то ошибка с запросом
            }
            mysql_close($db);
        }

    }
}


//TODO убрать pref из конструктора, статус формировать по pref и все функции возвращать по pref
//pref = префикс rec или mtn или live
/**
 * Class org_status
 */
class org_status extends cam_vlm{
    /**
     * @var sting
     */
    protected $sxml;
    /**
     * @var array
     */
    protected $status;  //[cam][pref]

    /**
     * @param int $uid
     * @param string $org
     * @param string $cam
     * @param string $pref
     */
    public function __construct($uid, $org, $cam, $pref='') {
        parent::__construct($uid, $org, $cam, $pref);
        $this->set_pref($pref);
        $this->set_url('requests/vlm.xml');
        $this->cmd('');
        $this->status = array();
        
        //парсим 
        $this->parse();
    }

    /**
     *
     */
    protected function parse() {
        $this->sxml = new SimpleXMLElement($this->message());
        //print_r($this->sxml);
        
        if(property_exists($this->sxml , 'broadcast')){
            $cam = array();
            foreach($this->sxml->broadcast as $bc){
                
                //echo $this->full;
                
                $c_org = '';
                $c_name = '';
                $c_pref = '';
                
                $a = explode('_', $bc['name']);
                //print_r($a);
                $c_org = $a[0];
                $c_name = $a[1];
                $c_pref = $a[2];
                
                $cam = $bc;
                
                foreach($cam->attributes() as $n=>$v){
                    $this->status[$c_name][$c_pref][$n] = (string) $v;
                }   
                
                foreach($cam as $n=>$v){
                    switch($n){
                        case 'output':
                            $this->status[$c_name][$c_pref][$n] = (string) $v;
                            break;
                        case 'inputs':
                            $this->status[$c_name][$c_pref]['input'] = (string) $v->input;
                            break;
                        case 'instances':
                            $this->status[$c_name][$c_pref]['state'] = (string)$cam->instances->instance['state'];
                            break;
                    }
                }
                if(!isset($this->status[$c_name][$c_pref]['state']))
                    $this->status[$c_name][$c_pref]['state'] = 'stopped';
            }
            
        }
    }

    /**
     * @param $cam
     * @param $pref
     * @return mixed
     */
    public function status($cam,$pref) {
        return $this->status[$cam][$pref];
    }

    /**
     * @param $cam
     * @param $pref
     * @return int
     */
    public function state($cam,$pref) {
        if($this->status[$cam][$pref]['state'] == 'playing')
            return 1;
        else
            return 0;
    }

    /**
     * @return mixed
     */
    public function xml() {
        header("Content-Type: text/xml");
        return $this->message();
    }
}

?>
