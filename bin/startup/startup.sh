#!/bin/bash

DATE=` date "+%F %T"`
DIR=/home/vlc/vlc
LOG=$DIR/log/rc.log

echo $DATE" Загрузка системы" >> $LOG;
#Делаем доступ для апача
#mount --bind /home/calc/vlc/www/ /var/www/html/cam/ >> $LOG 2>> $LOG
#mount --bind /home/calc/vlc/ /var/www/html/vlc/ >> $LOG 2>> $LOG

#Монтируем наш видеоархив
#mount /dev/sdc1 /mnt/video1/ >> $LOG 2>> $LOG
#mount постоянно пытается примонтировать NFS, по этому форкаем
###mount -t nfs nas1.xsrv.ru:/mnt/raid1/mx/video /mnt/video1 >> $LOG 2>> $LOG &
# ждем конца mount
#sleep 10
#if [ -d /mnt/video1/vlc ]; then
#    # монтируем рабочие папочки на место
#    mount --bind /mnt/video1/vlc/mtn $DIR/mtn >> $LOG 2>> $LOG
#    mount --bind /mnt/video1/vlc/rec $DIR/rec >> $LOG 2>> $LOG
#    mount --bind /mnt/video1/vlc/tmp $DIR/tmp >> $LOG 2>> $LOG
#else
#    echo $DATE" Не могу примонтировать FreeNAS" >> $LOG;
#fi

echo $DATE" Запуск стартового скрипта видеосервера" >> $LOG;
su vlc -c "/bin/php ~/vlc/bin/startup/startup.php" >> $LOG 2>> $LOG

#/bin/php ~/vlc/bin/startup/startup.php >> $LOG 2>> $LOG
