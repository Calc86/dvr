#!/bin/bash

if [ ! -d "/var/www/html/basic" ]; then
  # Control will enter here if $DIRECTORY exists.
  cd /var/www/html/
  composer create-project --prefer-dist yiisoft/yii2-app-basic basic
fi

# CMD from https://github.com/docker-library/php/blob/3f3220a0aa5992cdc08128cbbe0f2490694d6be9/7.1/stretch/apache/Dockerfile
apache2-foreground
