#!/bin/bash
#daemon -d

source `dirname $0`/../config.sh
DIR=$VLCDIR

VLC=cvlc
PORT=$3
CMD=$1
ORG=$2
TLPORT=$((44300+$PORT))
TLPWD=12345
HTPORT=$((8100+$PORT))
DAEMON=$4
IP=$HOST
DATE=`date +%F_%T`
VLM=$DIR/etc/$ORG/vlc.vlm
PROC=$DIR/proc/$ORG
PROC_FILE=$PROC/vlc.pid
REC=$DIR/rec/$ORG
MTN=$DIR/mtn/$ORG
LOG=$DIR/log/$ORG
LOG_FILE=$LOG/vlc.log

CL_IFS="-I http --http-host $IP --http-port $HTPORT -I telnet --telnet-port $TLPORT --telnet-password $TLPWD"
CL_LOG="--extraintf=http:logger --file-logging --log-verbose 2 --logfile $LOG_FILE"
#CL_LOG=""

echo $DATE" sh.start: $1" >> $LOG_FILE

case "$1" in
  startup)
    echo $DATE" startup sh.start:"$DATE >> $LOG_FILE
    if [ -f $PROC_FILE ]; then
      rm $PROC_FILE
    fi
    $0 start $ORG $PORT -d
  ;;
  start)
    if [ -f $PROC_FILE ]; then
      echo "$ORG уже запущен или жестко умер"
    else
      $DIR/bin/setup_dirs.sh $ORG
      if [ ! -f $VLM ]; then
        echo "vlm файла не существует"
        exit 1;
      fi

      ###############
      # -d
      ###############
      #--quiet
      #--pidfile
      #--file-logging --no-file-logging
      #
      #--repeat
      #--no-ffmpeg-hurry-up
      #sout-transcode-hurry-up
      #-rt-priority --sout-transcode-high-priority --loop --network-caching --sout-mux-caching
      #
      #
      echo "sh.start:"$DATE >> $LOG_FILE
      $VLC --ffmpeg-hw $DAEMON $CL_IFS --repeat --loop --network-caching 500 --sout-mux-caching 200 --vlm-conf $VLM --pidfile $PROC_FILE $CL_LOG
    fi
  ;;
  stop)
    $DIR/usr/bin/vlc_stop $ORG
    echo "sh.stop:"$DATE >> $LOG_FILE
  ;;
  restart)
    $0 stop  $ORG $PORT -d
    $0 start $ORG $PORT -d
  ;;
  *)
  echo "Usage: $0 {start} org_name port daemon"
  exit 1
esac

exit 0
