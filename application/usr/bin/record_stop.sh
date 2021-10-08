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

/home/calc/vlc/usr/bin/vlc_cam_stop $TLPORT $ORG"_"$CAM"_"$DO
