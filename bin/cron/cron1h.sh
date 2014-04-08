#!/bin/bash
# only \n end of line

source `dirname $0`/../config.sh
DIR=$VLCDIR
BIN=$DIR/bin
ETC=$DIR/etc

php $BIN/system/Main.php update
php $BIN/util/rec-pts.php &
