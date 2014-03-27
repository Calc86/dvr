#!/bin/bash
#daemon -d
DIR=/home/calc/vlc
BIN=motion
CMD=$1
ORG=$2
if [ ! $ORG ]; then
    echo "Не указана организация";
    exit 1;
fi

NODAEMON=$3 # -n
DATE=`date +%F_%T`
CONF=$DIR/etc/$ORG/motion/motion.conf
PROC=$DIR/proc/$ORG
PROC_FILE=$PROC/motion.pid

case "$1" in
  startup)
    #echo $DATE" startup motion sh.start:"$DATE >> $LOG_FILE
    if [ -f $PROC_FILE ]; then
      rm $PROC_FILE
    fi
    $0 start $ORG
  ;;
  start)
    if [ -f $PROC_FILE ]; then
      echo "motion для $ORG уже запущен или жестко умер"
    else
      $DIR/bin/setup_dirs.sh $ORG
      if [ ! -f $CONF ]; then
        echo $CONF" не существует"
        exit 1;
      fi
      #motion -n  -c /home/calc/vlc/etc/test1/motion/motion.conf
      $BIN $NODAEMON -c $CONF
    fi
  ;;
  stop)
    if [ ! -f $PROC/motion.pid ]; then
      echo "motion для $ORG не запущен"
      exit 0;
    fi
    PID=`cat $PROC/motion.pid`
    #echo $PID;
    kill $PID
  ;;
  restart)
    $0 stop  $ORG
    $0 start $ORG
  ;;
  *)
  echo "Usage: $0 {start} org_name port daemon"
  exit 1
esac

exit 0
