<?php

namespace modules\master;

/**
 * master module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'modules\master\controllers';

    public $isBackend;

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
        if ($this->isBackend === true) {
            $this->controllerNamespace = 'modules\master\controllers\backend';
            $this->setViewPath('@modules/master/views/backend');
        } else {
            $this->setViewPath('@modules/master/views/frontend');
        }
    }

    public static function translate($category, $message, $params = [], $language = null)
    {
        return Yii::t('modules/master/' . $category, $message, $params, $language);
    }
}
