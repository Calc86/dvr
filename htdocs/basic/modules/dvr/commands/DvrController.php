<?php

namespace app\modules\dvr\commands;

use yii\console\Controller;

/**
 * Основной контроллер для управления системой записи
 *
 * from htdocs/basic/modules/dvr/components/bin/main.php
 */
class DvrController extends Controller
{
    protected function isVlcStarted(): bool {
        return false;   //todo
    }

    protected function isMotionStarted(): bool {
        return false;   //todo
    }

    public function actionStart() {

    }
}
