<?php

class config{
    protected $uid;
    protected $user_name;
    protected $vlm=array();
    
    public function __construct($uid) {
        if(!$uid) die($this->error(__LINE__, "Пользователь не указана"));
        
        $this->uid = $uid;
        $this->set_user_name($uid);
        
        $tmp = $this->vlm_tmp();
        $this->split_vlm_tmp($tmp);
    }
    
    public function get_uid() {
        return $this->uid;
    }
    
    public function get_user_name() {
        return $this->user_name;
    }
    
    public function set_user_name($uid){
        $db = Database::getInstance()->getDB();
        $this->uid = $uid;
        $q = "select login from users where id=$uid";
        $r = $db->query($q);
        if(!$r) throw new MysqlQueryException($q);
        $n = $r->num_rows;
        if(!$n) die($this->error(__LINE__, "пользователь с id:$uid не существует"));
        list($this->user_name) = $r->fetch_row();
    }
    
    protected function error($line,$text) {
        return 'ERROR: ('.__FILE__.' line:'.$line.') '.$text."\n";
    }
    
    protected function vlm_tmp(){
        return file_get_contents(ETC."/templates/cam.tmp.vlm");
    }
    
    protected function split_vlm_tmp($tmp) {
        $a = explode('<cam>', $tmp);
        $cam = $a[1];
        $a = explode('<'.CamPrefix::LIVE.'>', $cam);
        $this->vlm['live'] = $a[1];
        $a = explode('<'.CamPrefix::RECORD.'>', $cam);
        $this->vlm['rec'] = $a[1];
        $a = explode('<'.CamPrefix::MOTION.'>', $cam);
        $this->vlm['mtn'] = $a[1];
    }
    
    public function vlm() {
        $db = Database::getInstance()->getDB();
        if(!$this->uid)  die($this->error(__LINE__, "Пользователь не указан"));
        $buf = '';
        
        //$search =  $this->get_search();
        
        $q = "select * from cam as c, cam_settings as cs where c.id=cs.user_id and c.user_id=$this->uid";
        $r = $db->query($q);
        if(!$r) throw new MysqlQueryException($q);
        
        while(($row = $r->fetch_assoc()) != 0){
            $dbv = $this->db_to_var($row);
            /* @var $row_live */
            /* @var $row_rec */
            /* @var $row_mtn */
            foreach ($dbv as $k=>$v) $$k=$v;
            
            $ar = $this->db_to_replace_array($row, array(
                '{user-name}'=>$this->user_name,
                '{livehost}'=>LIVEHOST
                        ));
            //print_r($ar);
            if($row_live){
                $buf.= str_replace($ar['search'], $ar['replace'], $this->vlm['live']);
                if($row_rec) $buf.= str_replace($search, $replace, $this->vlm['rec']);
                if($row_mtn) $buf.= str_replace($search, $replace, $this->vlm['mtn']);
                $buf.= "\n\n"; 
            }
        }
        
        return $buf;
    }
    
    /*
     * $dbv = $this->db_to_var($row);
     * foreach ($dbv as $k=>$v) $$k=$v;
     */
    protected function db_to_var($row) {
        $ar = array();
        foreach($row as $k => $v){
            $k = "row_".str_replace("-", "_", $k);
            $ar[$k]=$v;
        }
        return $ar;
    }
    
    //получаем массив для параметров в str_replace
    protected function db_to_replace_array($row,$additional=array()) {
        $ar = array('search','replace');
        
        foreach($row as $k=>$v){
            $ar['search'][] = '{'.$k.'}';
            $ar['replace'][] = $v;
        }
        
        foreach($additional as $k=>$v){
            $ar['search'][] = $k;
            $ar['replace'][] = $v;
        }
        
        return $ar;
    }
    
    public function logrotate() {
        if(!$this->uid) return '';
        $buf = '';
        
        $this->log = file_get_contents(ETC."/templates/logrotate.tmp.conf");
        
        //$search =  $this->get_search();
        
        $search =  array('{log}','{user-id}');
        $replace = array(LOG,$this->uid);
            
        $buf = str_replace($search, $replace, $this->log);
        
        return $buf;
    }
}
