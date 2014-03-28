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
     * @var YesNo
     */
    protected $debug;
    /**
     * @var string
     */
    protected $msg;
    /**
     * @var IP
     */
    protected $ip;
    /**
     * @var Port
     */
    protected $port;
    /**
     * @var Url
     */
    protected $url;
    /**
     * @var Url
     */
    protected $full_url;

    /**
     * @param Port $port
     * @param Url $url
     */
    public function __construct(Port $port, Url $url) {
        $this->ip = LIVEHOST;
        $this->port = $port;
        $this->set_url($url);
        //$this->full_url();
        //print_r($this);
    }

    /**
     * @param Url $url
     */
    protected function set_url(Url $url) {
        $this->url = $url;
        $this->full_url();
    }

    /**
     *
     */
    protected function full_url() {
        $this->full_url = new Url("http://$this->ip:$this->port/$this->url");
    }

    /**
     * @param VLMCommand $cmd
     */
    protected function cmd(VLMCommand $cmd) {
        $this->msg = '';
        $path = $this->full_url.rawurlencode(trim($cmd));
        if($this->debug) echo $path;
        $f = fopen($path,"r");
        if($f){
            while (($buf=fread($f, 1024)) != 0){
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
     * @param Port $port
     */
    public function __construct(Port $port) {
        parent::__construct($port, new Url('requests/vlm_cmd.xml?command='));
    }

    /**
     * @param CamName $cam
     */
    public function _new(CamName $cam) {
        $this->cmd(new VLMCommand("new $cam broadcast enabled loop"));
    }

    /**
     * @param CamName $cam
     * @param VLMCommand $cmd
     * @param YesNo $io
     */
    public function _setup(CamName $cam, VLMCommand $cmd, YesNo $io = null) {
        //todo: io заменить на значения из VLC комманда?
        if($io == null) $io = new YesNo(true);
        $direction = '';
        switch ($io->get()) {
            case false:
                $direction = 'input';
                //$this->cmd("setup $cam input \"$cmd\"");
                break;
            case true:
                $direction = 'output';
                //$this->cmd("setup $cam output $cmd");
                break;
        }
        $vlm = new VLMCommand("setup $cam $direction $cmd");
        $this->cmd($vlm);
    }

    /**
     * @param CamName $cam
     * @param VLMCommand $cmd
     */
    public function _control(CamName $cam, VLMCommand $cmd) {
        $this->cmd(new VLMCommand("control $cam $cmd"));
    }

    /**
     * @param CamName $cam
     */
    public function _show(CamName $cam) {
        $this->cmd(new VLMCommand("show $cam"));
    }

    /**
     * @param CamName $cam
     */
    public function _del(CamName $cam) {
        $this->cmd(new VLMCommand("del $cam"));
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
     * @var UserID
     */
    protected $uid;

    /**
     * @param UserID $uid
     */
    public function __construct(UserID $uid) {
        $port = HTSTART+$uid->get();
        parent::__construct(new Port($port));
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
     * @var CamID
     */
    protected $cid;
    /**
     * @var CamPrefix
     */
    protected $pref;
    /**
     * @var CamName
     */
    protected $full;

    /**
     * @param UserID $uid
     * @param CamID $cid
     * @param CamPrefix $pref
     */
    public function __construct(UserID $uid, CamID $cid, CamPrefix $pref) {
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
        $this->full = new CamName("UID_".$this->uid."__CID_".$this->cid."_".$this->pref);
    }

    /**
     * @param CamID $cid
     */
    protected function set_cid(CamID $cid) {
        $this->cid = $cid;
        //$this->full_url();
    }

    /**
     * @param CamPrefix $pref
     */
    protected function set_pref(CamPrefix $pref) {
        $this->pref = $pref;
        //$this->full_url();
    }
}

/**
 * Class cam_control
 */
class cam_control extends cam_vlm{

    /**
     * @var Path
     */
    protected $filename;    //путь к записываемому файлу

    /**
     * @param UserID $uid
     * @param CamID $cid
     * @param CamPrefix $pref
     */
    public function __construct(UserID $uid, CamID $cid, CamPrefix $pref=null) {
        if($pref == null) $pref = new CamPrefix(CamPrefix::LIVE);
        parent::__construct($uid, $cid, $pref);
    }

    /**
     * @param VLMInput $input
     * @param VLMOutput $output
     */
    public function create(VLMInput $input, VLMOutput $output) {
        $this->_new($this->full);   //new UID_{uid}__CID_{id}_live broadcast enabled loop
        $this->_setup($this->full, $input, new YesNo(false));  //setup UID_{uid}__CID_{id}_live input "{source-proto}://{cam-ip}:{source-port}/{source-path}"
        $this->_setup($this->full, $output);    //setup UID_{uid}__CID_{id}_live output #std{access=http{mime=video/mp4},mux=ts,dst=*:{stream-port}/{stream-path}.mp4}
    }

    /**
     * @param Port $port
     * @param Path $path
     * @return VLMOutput
     */
    public function get_stream_string(Port $port, Path $path) {
        //"http://localhost:{stream-port}/{stream-path}.mp4"
        return new VLMOutput("http://localhost:$port/$path.mp4");
    }

    /**
     * @param WebProto $proto
     * @param IP $ip
     * @param Port $port
     * @param Path $path
     * @return VLMInput
     */
    public function gen_input_string(WebProto $proto, IP $ip, Port $port, Path $path) {
        return new VLMInput("$proto://$ip:$port/$path");
    }

    /**
     * @param Port $port
     * @param Path $path
     * @return VLMOutput
     */
    public function gen_live_string(Port $port, Path $path) {
        //$ret = "#std{access=http{mime=video/mp4},mux=ts{use-key-frame,pcr=100,dts-delay=100},dst=*:$port/$path.mp4}";
        //$ret = "#transcode{venc=ffmpeg{codec=copy,fflags=+genpts}:std{access=http{mime=video/mp4},mux=ts,dst=*:$port/$path.mp4}";
        //$ret = "#std{access=http{mime=video/mp4},mux=ts{dts-delay=100},dst=*:$port/$path.mp4}";
        //$ret = "#std{access=http{mime=video/mp4},mux=ts,dst=*:$port/$path.mp4}";
        //return $ret;
        return new VLMOutput("#std{access=http{mime=video/mp4},mux=ts{use-key-frame,pcr=100,dts-delay=100},dst=*:$port/$path.mp4}");
    }

    /**
     * @param Port $port
     * @param Path $path
     * @return VLMOutput
     */
    public function gen_rtmp_string(Port $port, Path $path){
        return new VLMOutput("#transcode{venc=ffmpeg{keyint=1}}:std{access=http{mime=video/mp4},mux=ts,dst=*:$port/1$path");
    }

    /**
     * @param $path
     * @return VLMOutput
     */
    public function gen_rec_string($path) {
        return new VLMOutput("#std{access=file,mux=ts,dst=$path/rec.avi}");
    }

    /**
     *
     */
    public function delete() {
        $this->_del($this->full);
    }

    /**
     * @param YesNo $new_file
     */
    public function play(YesNo $new_file=null) {
        if($new_file == null) $new_file = new YesNo(true);
        //echo "PLAY: $this->full\n";
        //todo: Запет запуска, если камера уже "вещает"
        switch($this->pref){
            case CamPrefix::RECORD:
            case CamPrefix::MOTION:
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
                if($new_file) $this->_setup($this->full, new VLMCommand($cmd));
                $this->_control($this->full, new VLMCommand('play'));

                break;
            case CamPrefix::LIVE:
            default:
                $this->_control($this->full, new VLMCommand('play'));
                break;
        }
    }

    /**
     *
     */
    public function stop() {
        //echo "STOP: $this->full\n";   !!! не должно быть ни каких echo!!!
        $this->_control($this->full, new VLMCommand('stop'));
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
     * @param UserID $uid
     * @param CamID $cid
     * @param CamPrefix $pref
     */
    public function __construct(UserID $uid, CamID $cid, CamPrefix $pref=null) {
        if($pref == null) $pref = new CamPrefix(CamPrefix::LIVE);
        parent::__construct($uid, $cid, $pref);
    }


    /**
     * @param YesNo $new_file
     * @throws MysqlQueryException
     */
    public function play(YesNo $new_file=null){
        $db = Database::getInstance()->getDB();
        if(is_null($new_file)) $new_file = new YesNo(true);
        parent::play($new_file);

        if($new_file){
            switch($this->pref){
                case CamPrefix::RECORD:
                case CamPrefix::MOTION:
                    // занести информацию о нашем файле в базу
                    $now = time();
                    $q_arc = "insert into archive values(0, $this->cid, '$this->pref', $now, 0, 0, 0, 'busy', 0, '$this->filename')";
                    if(!$db->query($q_arc)) throw new MysqlQueryException($q_arc);

                    break;
            }
        }
    }

    /**
     *
     */
    public function stop(){
        $db = Database::getInstance()->getDB();
        // узнать, велась ли запись по данному файлику или нет.
        parent::stop();

        if($this->pref==CamPrefix::RECORD){
            //$q = "select max(id) from archive where cam_id=$this->cid and type='$this->pref'";
            $q = "select id,file from archive where cam_id=$this->cid and type='$this->pref' order by id desc limit 1";
            $r = $db->query($q);
            if(!$r) throw new MysqlQueryException($q);

            $now = time();
            $row = $r->fetch_row();
            $id = $row[0];
            $file = $row[1];
            $qu = "update archive set date_end=$now, rebuilded='no' where id=$id limit 1";
            $r = $db->query($qu);
            if(!$r) throw new MysqlQueryException($qu);
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
     * @var string
     */
    protected $sxml;
    /**
     * @var array
     */
    protected $status;  //[cam][pref]

    /**
     * @param UserID $uid
     * @param OrgName $org
     * @param CamName $cam
     * @param CamPrefix $pref
     */
    public function __construct(UserID $uid, OrgName $org, CamName $cam, CamPrefix $pref=null) {
        if($pref == null) $pref = new CamPrefix(CamPrefix::LIVE);
        parent::__construct($uid, $org, $cam, $pref);
        $this->set_pref($pref);
        $this->set_url(new Url('requests/vlm.xml'));
        $this->cmd(new VLMCommand(''));
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

