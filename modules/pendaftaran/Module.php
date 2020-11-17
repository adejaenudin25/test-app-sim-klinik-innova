<?php

namespace modules\pendaftaran;

use Yii;
use yii\console\Application as ConsoleApplication;

/**
 * Class Module
 * @package modules\pendaftaran
 */
class Module extends \yii\base\Module
{
    public $controllerNamespace = 'modules\pendaftaran\controllers\frontend';

    /**
     * @var bool If the module is used for the admin panel.
     */
    public $isBackend;

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
        if ($this->isBackend === true) {
            $this->controllerNamespace = 'modules\pendaftaran\controllers\backend';
            $this->setViewPath('@modules/pendaftaran/views/backend');
        } else {
            $this->setViewPath('@modules/pendaftaran/views/frontend');
        }
        if (Yii::$app instanceof ConsoleApplication) {
            $this->controllerNamespace = 'modules\pendaftaran\commands';
        }
    }

    /**
     * @param string $category
     * @param string $message
     * @param array $params
     * @param null|string $language
     * @return string
     */
    public static function translate($category, $message, $params = [], $language = null)
    {
        return Yii::t('modules/pendaftaran/' . $category, $message, $params, $language);
    }
}
