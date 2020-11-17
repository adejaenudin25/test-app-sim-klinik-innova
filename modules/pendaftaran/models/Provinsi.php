<?php

namespace modules\pendaftaran\models;

use Yii;

/**
 * This is the model class for table "tbl_provinsi".
 *
 * @property int $id
 * @property string $provinsi
 * @property string $p_bsni
 *
 * @property KabupatenKota[] $kabupatenKotas
 */
class Provinsi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_provinsi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['provinsi'], 'string', 'max' => 100],
            [['p_bsni'], 'string', 'max' => 5],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'provinsi' => 'Provinsi',
            'p_bsni' => 'P Bsni',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKabupatenKotas()
    {
        return $this->hasMany(KabupatenKota::className(), ['kd_provinsi' => 'id']);
    }
}
