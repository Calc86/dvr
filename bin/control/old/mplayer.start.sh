#!/bin/bash
#daemon -d
DIR=/home/calc/vlc
BIN=mplayer
CMD=$1
ORG=$2
CAM=$3
if [ ! $CMD ]; then
    echo "Не указана комманда";
    exit 1;
fi
if [ ! $ORG ]; then
    echo "Не указана организация";
    exit 1;
fi
if [ ! $CAM ]; then
    echo "Не указана камера, обрабатываем все";
    #exit 1;
    ALL=1
fi

DATE=`date +%F_%T`
CONF=$DIR/etc/$ORG/$BIN.conf
PROC=$DIR/proc/$ORG

case "$1" in
  start)
    if [ ! -f $CONF ]; then
      echo $CONF" не существует"
      exit 1;
    fi
    if [ ! $ALL ]; then
      CAMS=$CAM;
    else
      CAMS=`cat $CONF`;
    fi
    for CAM in $CAMS
    do
      #проверить pid файл
      #запустить скрипт
      PIDF=$PROC/$BIN_$CAM.pid
      TMP=$DIR/tmp/$ORG/$CAM

      if [ ! -d $TMP ]; then
        mkdir $TMP;
      fi
      if [ -f $PIDF ]; then
        echo "$BIN для камеры $CAM уже запущен или мертв";
      else
        echo "запускаем $BIN для $CAM";
        $DIR/bin/$ORG/$BIN/$CAM.sh
        PS=`ps -aef | grep $BIN | grep $ORG | grep $CAM | grep -v bash | grep -v $BIN.start | grep -v grep`
        PID=`echo $PS | awk '{print $2}'`
        echo $PID > $PIDF
      fi
    done
  ;;
  stop)
    if [ ! -f $CONF ]; then
      echo $CONF" не существует, придется чистить в ручную... :("
      exit 1;
    fi
    if [ ! $ALL ]; then
      CAMS=$CAM;
    else
      CAMS=`cat $CONF`;
    fi
    for CAM in $CAMS
    do
      #проверить pid файл
      #убить скрипт скрипт
      PIDF=$PROC/$BIN_$CAM.pid
      if [ ! -f $PIDF ]; then
        echo "$BIN для камеры $CAM не запущен, судя по отсутствию pid файла";
      else
        echo "убиваем $BIN для камеры $CAM";
        kill `cat $PIDF`
        rm $PIDF
      fi
    done
  ;;
  restart)
    $0 stop  $ORG
    $0 start $ORG
  ;;
  *)
  echo "Usage: $BIN {start} org_name port daemon"
  exit 1
esac

exit 0
