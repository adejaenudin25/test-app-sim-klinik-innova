<?php

namespace modules\master\controllers\backend;

use yii\web\Controller;

/**
 * Default controller for the `master` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
