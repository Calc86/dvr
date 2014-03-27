#!/bin/bash

source `dirname $0`/../config.sh
DIR=$VLCDIR
BIN=$DIR/bin
ETC=$DIR/etc

php $BIN/control/restart_record.php

# очистим ненужные записи
php $BIN/util/rec-clear.php

# заглушка
# удалить пустые файлы старше 1 дня, так же удаляет пустые папки
find $DIR/rec -empty -mtime +1 -delete
find $DIR/mtn -empty -mtime +1 -delete

# ротация логов организаций
for i in `find $ETC | grep logrotate.conf`
do
  /sbin/logrotate -s /dev/null $i >> /dev/null
done

php $BIN/util/rec-pts.php &
