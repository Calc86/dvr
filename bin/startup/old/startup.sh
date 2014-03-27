#!/bin/bash

source `dirname $0`/../config.sh
DIR=$VLCDIR

BIN=$DIR/bin
ETC=$DIR/etc
LIST=$ETC/startup_list
#нужно сформировать стартап лист
#формируем...(TODO)
LOG=$DIR/log/startup.log
DATE=`date "+%F %T"`
echo $DATE" startup" >> $LOG

if [ ! -f $LIST ]; then
  echo $DATE" нет списка запуска" >> $LOG;
  exit 1;
fi

ORGS=`cat $LIST`

for i in $ORGS
do
  if [ $i ]; then
    echo $DATE" запуск vlc "$i >> $LOG;
    $BIN/$i/vlc.sh startup >> $LOG 2>> $LOG;
    echo $DATE" запуск motion "$i >> $LOG;
    $BIN/$i/motion.sh startup >> $LOG 2>> $LOG;
  else
    echo $DATE" "$i" не существует" >> $LOG;
  fi
done
echo $DATE" запуск завершен" >> $LOG;
