<?php

namespace modules\master\models;

use Yii;

/**
 * This is the model class for table "tbl_kecamatan".
 *
 * @property int $id
 * @property int $kd_kabkot
 * @property string $kecamatan
 *
 * @property KabupatenKota $kdKabkot
 * @property Kelurahan[] $kelurahans
 */
class Kecamatan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_kecamatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_kabkot'], 'required'],
            [['kd_kabkot'], 'default', 'value' => null],
            [['kd_kabkot'], 'integer'],
            [['kecamatan'], 'string', 'max' => 50],
            [['kd_kabkot'], 'exist', 'skipOnError' => true, 'targetClass' => KabupatenKota::className(), 'targetAttribute' => ['kd_kabkot' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kd_kabkot' => 'Kd Kabkot',
            'kecamatan' => 'Kecamatan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKdKabkot()
    {
        return $this->hasOne(KabupatenKota::className(), ['id' => 'kd_kabkot']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKelurahans()
    {
        return $this->hasMany(Kelurahan::className(), ['kd_kecamatan' => 'id']);
    }
}
