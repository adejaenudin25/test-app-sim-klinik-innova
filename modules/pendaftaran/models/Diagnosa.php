<?php

namespace modules\pendaftaran\models;

use Yii;

/**
 * This is the model class for table "tbl_diagnosa".
 *
 * @property int $id
 * @property int $kd_kunjungan
 * @property int $kd_penyakit
 * @property string $icdx
 * @property string $diagnosa
 * @property string $dokter
 * @property string $jenis
 * @property string $kasus
 *
 * @property Kunjungan $kdKunjungan
 * @property Penyakit $kdPenyakit
 */
class Diagnosa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_diagnosa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_kunjungan', 'kd_penyakit'], 'required'],
            [['kd_kunjungan', 'kd_penyakit'], 'default', 'value' => null],
            [['kd_kunjungan', 'kd_penyakit'], 'integer'],
            [['icdx'], 'string', 'max' => 10],
            [['diagnosa', 'dokter'], 'string', 'max' => 30],
            [['jenis'], 'string', 'max' => 11],
            [['kasus'], 'string', 'max' => 4],
            [['kd_kunjungan'], 'exist', 'skipOnError' => true, 'targetClass' => Kunjungan::className(), 'targetAttribute' => ['kd_kunjungan' => 'id']],
            [['kd_penyakit'], 'exist', 'skipOnError' => true, 'targetClass' => Penyakit::className(), 'targetAttribute' => ['kd_penyakit' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kd_kunjungan' => 'Kd Kunjungan',
            'kd_penyakit' => 'Kd Penyakit',
            'icdx' => 'Icdx',
            'diagnosa' => 'Diagnosa',
            'dokter' => 'Dokter',
            'jenis' => 'Jenis',
            'kasus' => 'Kasus',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKdKunjungan()
    {
        return $this->hasOne(Kunjungan::className(), ['id' => 'kd_kunjungan']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKdPenyakit()
    {
        return $this->hasOne(Penyakit::className(), ['id' => 'kd_penyakit']);
    }
}
