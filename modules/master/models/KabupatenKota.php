<?php

namespace modules\master\models;

use Yii;

/**
 * This is the model class for table "tbl_kabupaten_kota".
 *
 * @property int $id
 * @property int $kd_provinsi
 * @property string $kabkot
 * @property string $ibukota
 * @property string $k_bsni
 *
 * @property Provinsi $kdProvinsi
 * @property Kecamatan[] $kecamatans
 */
class KabupatenKota extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_kabupaten_kota';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_provinsi', 'kabkot'], 'required'],
            [['kd_provinsi'], 'default', 'value' => null],
            [['kd_provinsi'], 'integer'],
            [['kabkot', 'ibukota'], 'string', 'max' => 100],
            [['k_bsni'], 'string', 'max' => 3],
            [['kd_provinsi'], 'exist', 'skipOnError' => true, 'targetClass' => Provinsi::className(), 'targetAttribute' => ['kd_provinsi' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kd_provinsi' => 'Kd Provinsi',
            'kabkot' => 'Kabkot',
            'ibukota' => 'Ibukota',
            'k_bsni' => 'K Bsni',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKdProvinsi()
    {
        return $this->hasOne(Provinsi::className(), ['id' => 'kd_provinsi']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKecamatans()
    {
        return $this->hasMany(Kecamatan::className(), ['kd_kabkot' => 'id']);
    }
}
