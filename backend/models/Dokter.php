<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_dokter".
 *
 * @property int $id
 * @property string $dokter
 *
 * @property Kunjungan[] $kunjungans
 */
class Dokter extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_dokter';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dokter'], 'required'],
            [['dokter'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'dokter' => 'Dokter',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKunjungans()
    {
        return $this->hasMany(Kunjungan::className(), ['kd_dokter' => 'id']);
    }
}
