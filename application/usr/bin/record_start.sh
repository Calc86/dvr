#
#1 порт телнета
#2 имя камеры
#3 имя организации
#4 mtn или rec

#USAGE=0
if [ ! $1 ]; then
  USAGE=1;
fi
if [ ! $2 ]; then
  USAGE=1;
fi
if [ ! $3 ]; then
  USAGE=1;
fi
if [ ! $4 ]; then
  USAGE=1;
fi

if [ $USAGE ]; then
  echo "usage: $0 tlport cam_name org_name mtn/rec";
  exit 1;
fi

DATE=`date +%F`
TIME=`date +%T`
TLPORT=$1;
CAM=$2
ORG=$3
DO=$4

#создать папку под запись с сегодняшним числом
DIR=/home/calc/vlc/$4/$3/$DATE
if [ ! -d $DIR ]; then
  mkdir $DIR
fi
#echo "/home/calc/vlc/usr/bin/vlc_cam_record $1 $2 $3 $DATE $TIME $4"
/home/calc/vlc/usr/bin/vlc_cam_record $TLPORT $CAM $ORG $DATE $TIME $DO
