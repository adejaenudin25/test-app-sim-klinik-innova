<?php

namespace modules\pendaftaran\traits;

use Yii;
use modules\pendaftaran\Module;

/**
 * Trait ModuleTrait
 *
 * @property-read Module $module
 * @package modules\pendaftaran\traits
 */
trait ModuleTrait
{
    /**
     * @return null|\yii\base\Module
     */
    public function getModule()
    {
        return Yii::$app->getModule('pendaftaran');
    }
}
