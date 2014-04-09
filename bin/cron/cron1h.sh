#!/bin/bash
# only \n end of line

source `dirname $0`/../config.sh
DIR=$VLCDIR
BIN=$DIR/bin
ETC=$DIR/etc

## очень большие проблемы с load average, скорее всего связано с количеством оперативки и NFS
#php $BIN/system/Main.php update
#php $BIN/util/rec-pts.php &
