#!/bin/sh

# создает конфиг для nginx на основе файла .env

env $(cat .env | grep -v "#" | xargs) envsubst \$DOMAIN,\$PREFIX,\$HTTP_PORT,\$SUPERVISORD_PORT,\$PMA_PORT,\$RABBIT_MANAGMENT_PORT,\$RABBIT_MQTT_WEB_PORT,\$ME_PORT,\$RC_PORT < ./compose/yii2/nginx.template.conf > dvr.conf