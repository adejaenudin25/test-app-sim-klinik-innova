<?php

namespace modules\pendaftaran\commands;

use yii\console\Controller;

/**
 * Class DefaultController
 * @package modules\pendaftaran\commands
 */
class DefaultController extends Controller
{
    /**
     * Console default actions
     * @inheritdoc
     */
    public function actionIndex()
    {
        echo 'php yii pendaftaran/default' . PHP_EOL;
    }
}
