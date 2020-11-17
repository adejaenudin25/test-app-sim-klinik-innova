<?php

namespace modules\master\models;

use Yii;

/**
 * This is the model class for table "tbl_apt_satuan_besar".
 *
 * @property int $id
 * @property string $satuan_besar
 *
 * @property AptObat[] $aptObats
 */
class AptSatuanBesar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_apt_satuan_besar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['satuan_besar'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'satuan_besar' => 'Satuan Besar',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAptObats()
    {
        return $this->hasMany(AptObat::className(), ['kd_satuan_besar' => 'id']);
    }
}
