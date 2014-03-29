#!/bin/bash

source `dirname $0`/../config.sh
DIR=$VLCDIR
BIN=$DIR/bin

# заглушка на восстановление связи раз в 1 минуту.... или же на стоп всего этого
#php $BIN/control/rerun_stream.php
php $BIN/system/Main.php update


#по моему это для ffmpeg-овских снапшотов
#/bin/bash $BIN/util/tmp_clear.sh  >> /dev/null
