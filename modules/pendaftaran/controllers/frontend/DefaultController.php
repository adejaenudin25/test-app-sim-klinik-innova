<?php

namespace modules\pendaftaran\controllers\frontend;

use yii\web\Controller;

/**
 * Class DefaultController
 * @package modules\pendaftaran\controllers\frontend
 */
class DefaultController extends Controller
{
    /**
     * Displays index page.
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
