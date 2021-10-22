<?php

namespace app\modules\vlc\components\vlc;

use app\modules\vlc\types\CamID;
use app\modules\vlc\types\CamPrefix;
use app\modules\vlc\types\IP;
use app\modules\vlc\types\Path;
use app\modules\vlc\types\Port;
use app\modules\vlc\types\UserID;
use app\modules\vlc\types\VLMCommand;
use app\modules\vlc\types\VLMInput;
use app\modules\vlc\types\VLMOutput;
use app\modules\vlc\types\WebProto;
use app\modules\vlc\types\YesNo;

class CamControl extends CamVlm
{

    /**
     * @var Path
     */
    protected $filename;    //путь к записываемому файлу

    /**
     * @param UserID $uid
     * @param CamID $cid
     * @param CamPrefix|null $pref
     */
    public function __construct(UserID $uid, CamID $cid, ?CamPrefix $pref = null)
    {
        if ($pref == null) $pref = new CamPrefix(CamPrefix::LIVE);
        parent::__construct($uid, $cid, $pref);
    }

    /**
     * @param VLMInput $input
     * @param VLMOutput $output
     */
    public function create(VLMInput $input, VLMOutput $output)
    {
        $this->_new($this->full);   //new UID_{uid}__CID_{id}_live broadcast enabled loop
        $this->_setup($this->full, $input, new YesNo(false));  //setup UID_{uid}__CID_{id}_live input "{source-proto}://{cam-ip}:{source-port}/{source-path}"
        $this->_setup($this->full, $output);    //setup UID_{uid}__CID_{id}_live output #std{access=http{mime=video/mp4},mux=ts,dst=*:{stream-port}/{stream-path}.mp4}
    }

    /**
     * @param Port $port
     * @param Path $path
     * @return VLMOutput
     */
    public function get_stream_string(Port $port, Path $path): VLMOutput
    {
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
    public function gen_input_string(WebProto $proto, IP $ip, Port $port, Path $path)
    {
        return new VLMInput("$proto://$ip:$port/$path");
    }

    /**
     * @param Port $port
     * @param Path $path
     * @return VLMOutput
     */
    public function gen_live_string(Port $port, Path $path): VLMOutput
    {
        //$ret = "#std{access=http{mime=video/mp4},mux=ts{use-key-frame,pcr=100,dts-delay=100},dst=*:$port/$path.mp4}";
        //$ret = "#transcode{venc=ffmpeg{codec=copy,fflags=+genpts}:std{access=http{mime=video/mp4},mux=ts,dst=*:$port/$path.mp4}";
        //$ret = "#std{access=http{mime=video/mp4},mux=ts{dts-delay=100},dst=*:$port/$path.mp4}";
        //$ret = "#std{access=http{mime=video/mp4},mux=ts,dst=*:$port/$path.mp4}";
        //return $ret;
        return new VLMOutput("#std{access=http{mime=video/mp4},mux=ts{use-key-frames},dst=*:$port/$path.mp4}");
        //return new VLMOutput("#std{access=http{mime=video/mp2t},mux=ts{use-key-frames},dst=*:$port/$path.mp4}");
        //return new VLMOutput("#transcode{fflags=genpts,codec=copy}:std{access=http{mime=video/mp4},mux=ts,dst=*:$port/$path.mp4}");
    }

    /**
     * @param Port $port
     * @param Path $path
     * @param UserID $userID
     * @param CamID $camID
     * @return VLMOutput
     */
    public function gen_lhttp_string(Port $port, Path $path, UserID $userID, CamID $camID): VLMOutput
    {
        $transcode = "";
        //$transcode = "transcode{width=320,height=240,fps=25,vcodec=h264,vb=256,venc=x264{aud,profile=baseline,level=30,keyint=30,ref=1},acodec=mp3,ab=96}:";
        //$transcode = "transcode{width=320,height=240,fps=25,vcodec=h264,vb=256,venc=x264{aud,profile=baseline,level=30,keyint=30,ref=1},acodec=mp3,ab=96}:";
        return new VLMOutput("#{$transcode}std{access=livehttp{seglen=5,delsegs=true,numsegs=15,splitanywhere=true,index=$path/stream-$camID.m3u8,index-url=http://10.154.28.203/lhttp/$userID/stream-$camID-########.ts},mux=ts{use-key-frames},dst=$path/stream-$camID-########.ts}");
    }

    /**
     * @param Port $port
     * @param Path $path
     * @return VLMOutput
     */
    public function gen_rtmp_string(Port $port, Path $path): VLMOutput
    {
        return new VLMOutput("#transcode{venc=ffmpeg{keyint=1}}:std{access=http{mime=video/mp4},mux=ts{use-key-frames},dst=*:$port/1$path");
    }

    /**
     * @param $path
     * @return VLMOutput
     */
    public function gen_rec_string($path): VLMOutput
    {
        return new VLMOutput("#std{access=file,mux=ts{use-key-frames},dst=$path/rec.avi}");
    }

    /**
     *
     */
    public function delete()
    {
        $this->_del($this->full);
    }

    /**
     * @param YesNo|null $new_file
     */
    public function play(?YesNo $new_file = null)
    {
        if ($new_file == null) $new_file = new YesNo(true);
        //echo "PLAY: $this->full\n";
        //todo: Запет запуска, если камера уже "вещает"
        switch ($this->pref) {
            case CamPrefix::RECORD:
            case CamPrefix::MOTION:
                //send "output #std{access=file,mux=ts,dst=/home/calc/vlc/$pref/$org/$date/$full.avi}"
                //берем текущее время
                $date = date("Y-m-d");
                $time = date("H_i_s");

                //$path = "/home/calc/vlc/$this->pref/$this->org/$date";
                //создаем папочку с сегодняшним числом
                //пишеи в pre папку
                $path = DIR . "/pre_$this->pref/$this->uid/$date";
                if (!file_exists($path)) {
                    mkdir($path);
                }

                //используем время в имени файла
                $this->filename = $path . '/' . $time . '_' . $this->full;
                //$cmd = "#std{access=file,mux=ts{use-key-frames},dst=$this->filename.avi}";
                $cmd = "#std{access=file,mux=mp4,dst=$this->filename.avi}";
                //echo $cmd;
                if ($new_file) $this->_setup($this->full, new VLMCommand($cmd));
                $this->_control($this->full, new VLMCommand('play'));

                break;
            case CamPrefix::LHTTP:
            case CamPrefix::LIVE:
            default:
                $this->_control($this->full, new VLMCommand('play'));
                break;
        }
    }

    /**
     *
     */
    public function stop()
    {
        //echo "STOP: $this->full\n";  // !!! не должно быть ни каких echo!!!
        $this->_control($this->full, new VLMCommand('stop'));
    }

    /**
     * @return string
     */
    public function show()
    {
        $this->_show($this->full);
        return $this->message();
    }
}
