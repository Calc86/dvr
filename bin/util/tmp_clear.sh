#!/bin/bash
source `dirname $0`/../config.sh
DIR=$VLCDIR
TMP=$DIR/tmp

ORGS=`ls $TMP`

for ORG in $ORGS
do
    echo $ORG;
    CAMS=`ls $TMP/$ORG`;
    for CAM in $CAMS
    do
        echo $CAM;
        LIST=`ls -t $TMP/$ORG/$CAM`;
        #echo $LIST;
        I=0;
        for FILE in $LIST
        do
            I=$(($I+1));
            if [ $I -le 2 ]; then
                continue;
            else
                #echo $FILE;
                rm $TMP/$ORG/$CAM/$FILE;
                continue;
            fi
        done
    done
done
