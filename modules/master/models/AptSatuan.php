<?php

namespace modules\master\models;

use Yii;

/**
 * This is the model class for table "tbl_apt_satuan".
 *
 * @property int $id
 * @property string $satuan
 *
 * @property AptObat[] $aptObats
 */
class AptSatuan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_apt_satuan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['satuan'], 'required'],
            [['satuan'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'satuan' => 'Satuan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAptObats()
    {
        return $this->hasMany(AptObat::className(), ['kd_satuan' => 'id']);
    }
}
