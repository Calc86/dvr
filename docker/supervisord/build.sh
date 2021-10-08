#!/usr/bin/bash

docker image rm bnet/supervisord:18.04-1.0
docker build -t bnet/supervisord:18.04-1.0 .
