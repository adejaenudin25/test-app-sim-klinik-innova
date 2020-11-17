<?php

namespace modules\pendaftaran\models;

use Yii;

/**
 * This is the model class for table "tbl_anamnesa".
 *
 * @property int $id
 * @property int $kd_kunjungan
 * @property string $keluhan_utama
 * @property string $lama_sakit
 * @property string $keluhan_tambahan
 * @property int $tinggi_badan
 * @property int $berat_badan
 * @property int $suhu
 * @property int $is_hamil
 * @property string $alergi_obat
 * @property string $alergi_makanan
 * @property string $alergi_lainnya
 * @property string $edukasi
 * @property string $terapi
 * @property string $rencana
 * @property string $observasi
 * @property string $keterangan
 * @property int $is_merokok
 * @property int $is_alkohol
 * @property int $is_kurang_vegetarian
 * @property string $dokter
 * @property int $kd_dokter
 * @property string $tgl_anamnesa
 *
 * @property Kunjungan $kdKunjungan
 */
class Anamnesa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_anamnesa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_kunjungan'], 'required'],
            [['kd_kunjungan', 'tinggi_badan', 'berat_badan', 'suhu', 'is_hamil', 'is_merokok', 'is_alkohol', 'is_kurang_vegetarian', 'kd_dokter'], 'default', 'value' => null],
            [['kd_kunjungan', 'tinggi_badan', 'berat_badan', 'suhu', 'is_hamil', 'is_merokok', 'is_alkohol', 'is_kurang_vegetarian', 'kd_dokter'], 'integer'],
            [['tgl_anamnesa'], 'safe'],
            [['keluhan_utama', 'keluhan_tambahan', 'alergi_obat', 'alergi_makanan', 'alergi_lainnya'], 'string', 'max' => 50],
            [['lama_sakit'], 'string', 'max' => 20],
            [['edukasi', 'terapi', 'rencana', 'observasi', 'keterangan'], 'string', 'max' => 100],
            [['dokter'], 'string', 'max' => 30],
            [['kd_kunjungan'], 'exist', 'skipOnError' => true, 'targetClass' => Kunjungan::className(), 'targetAttribute' => ['kd_kunjungan' => 'id']],
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
            'keluhan_utama' => 'Keluhan Utama',
            'lama_sakit' => 'Lama Sakit',
            'keluhan_tambahan' => 'Keluhan Tambahan',
            'tinggi_badan' => 'Tinggi Badan',
            'berat_badan' => 'Berat Badan',
            'suhu' => 'Suhu',
            'is_hamil' => 'Is Hamil',
            'alergi_obat' => 'Alergi Obat',
            'alergi_makanan' => 'Alergi Makanan',
            'alergi_lainnya' => 'Alergi Lainnya',
            'edukasi' => 'Edukasi',
            'terapi' => 'Terapi',
            'rencana' => 'Rencana',
            'observasi' => 'Observasi',
            'keterangan' => 'Keterangan',
            'is_merokok' => 'Is Merokok',
            'is_alkohol' => 'Is Alkohol',
            'is_kurang_vegetarian' => 'Is Kurang Vegetarian',
            'dokter' => 'Dokter',
            'kd_dokter' => 'Kd Dokter',
            'tgl_anamnesa' => 'Tgl Anamnesa',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKdKunjungan()
    {
        return $this->hasOne(Kunjungan::className(), ['id' => 'kd_kunjungan']);
    }
}
