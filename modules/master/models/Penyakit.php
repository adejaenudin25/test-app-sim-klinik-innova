<?php

namespace modules\master\models;

use Yii;

/**
 * This is the model class for table "tbl_penyakit".
 *
 * @property int $id
 * @property string $icdx
 * @property string $penyakit
 *
 * @property Diagnosa[] $diagnosas
 */
class Penyakit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_penyakit';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['icdx'], 'string', 'max' => 10],
            [['penyakit'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'icdx' => 'Icdx',
            'penyakit' => 'Penyakit',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDiagnosas()
    {
        return $this->hasMany(Diagnosa::className(), ['kd_penyakit' => 'id']);
    }
}
