#!/usr/bin/bash

docker image rm bnet/yii-app:7.4-1.1-video
docker build -t bnet/yii-app:7.4-1.1-video .
