<?php

namespace modules\pendaftaran\models;

use Yii;

/**
 * This is the model class for table "tbl_kunjungan".
 *
 * @property int $id
 * @property int $kd_unit
 * @property int $kd_pasien
 * @property string $tgl_daftar
 * @property string $status_kunjungan
 * @property int $kd_dokter
 *
 * @property Anamnesa[] $anamnesas
 * @property Diagnosa[] $diagnosas
 * @property Dokter $kdDokter
 * @property Pasien $kdPasien
 * @property Unit $kdUnit
 */
class Kunjungan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_kunjungan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_unit', 'kd_pasien', 'kd_dokter'], 'required'],
            [['kd_unit', 'kd_pasien', 'kd_dokter'], 'default', 'value' => null],
            [['kd_unit', 'kd_pasien', 'kd_dokter'], 'integer'],
            [['tgl_daftar'], 'safe'],
            [['status_kunjungan'], 'string', 'max' => 5],
            [['kd_dokter'], 'exist', 'skipOnError' => true, 'targetClass' => Dokter::className(), 'targetAttribute' => ['kd_dokter' => 'id']],
            [['kd_pasien'], 'exist', 'skipOnError' => true, 'targetClass' => Pasien::className(), 'targetAttribute' => ['kd_pasien' => 'id']],
            [['kd_unit'], 'exist', 'skipOnError' => true, 'targetClass' => Unit::className(), 'targetAttribute' => ['kd_unit' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kd_unit' => 'Kd Unit',
            'kd_pasien' => 'Kd Pasien',
            'tgl_daftar' => 'Tgl Daftar',
            'status_kunjungan' => 'Status Kunjungan',
            'kd_dokter' => 'Kd Dokter',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAnamnesas()
    {
        return $this->hasMany(Anamnesa::className(), ['kd_kunjungan' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDiagnosas()
    {
        return $this->hasMany(Diagnosa::className(), ['kd_kunjungan' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKdDokter()
    {
        return $this->hasOne(Dokter::className(), ['id' => 'kd_dokter']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKdPasien()
    {
        return $this->hasOne(Pasien::className(), ['id' => 'kd_pasien']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKdUnit()
    {
        return $this->hasOne(Unit::className(), ['id' => 'kd_unit']);
    }
}
