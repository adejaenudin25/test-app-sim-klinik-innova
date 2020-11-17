<?php

namespace modules\master\models;

use Yii;

/**
 * This is the model class for table "tbl_apt_obat".
 *
 * @property int $id
 * @property int $kd_satuan
 * @property int $kd_satuan_besar
 * @property string $nama_obat
 * @property string $ket_obat
 * @property int $generic
 * @property int $fractions
 * @property double $mg
 * @property int $dpho
 * @property int $tag
 * @property int $aktif
 * @property int $kd_pabrik
 * @property string $data_owner
 * @property int $generik
 *
 * @property AptSatuan $kdSatuan
 * @property AptSatuanBesar $kdSatuanBesar
 * @property Pabrik $kdPabrik
 */
class AptObat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_apt_obat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_satuan', 'mg', 'dpho'], 'required'],
            [['kd_satuan', 'kd_satuan_besar', 'generic', 'fractions', 'dpho', 'tag', 'aktif', 'kd_pabrik', 'generik'], 'default', 'value' => null],
            [['kd_satuan', 'kd_satuan_besar', 'generic', 'fractions', 'dpho', 'tag', 'aktif', 'kd_pabrik', 'generik'], 'integer'],
            [['mg'], 'number'],
            [['nama_obat'], 'string', 'max' => 60],
            [['ket_obat'], 'string', 'max' => 30],
            [['data_owner'], 'string', 'max' => 100],
            [['kd_satuan'], 'exist', 'skipOnError' => true, 'targetClass' => AptSatuan::className(), 'targetAttribute' => ['kd_satuan' => 'id']],
            [['kd_satuan_besar'], 'exist', 'skipOnError' => true, 'targetClass' => AptSatuanBesar::className(), 'targetAttribute' => ['kd_satuan_besar' => 'id']],
            [['kd_pabrik'], 'exist', 'skipOnError' => true, 'targetClass' => Pabrik::className(), 'targetAttribute' => ['kd_pabrik' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kd_satuan' => 'Kd Satuan',
            'kd_satuan_besar' => 'Kd Satuan Besar',
            'nama_obat' => 'Nama Obat',
            'ket_obat' => 'Ket Obat',
            'generic' => 'Generic',
            'fractions' => 'Fractions',
            'mg' => 'Mg',
            'dpho' => 'Dpho',
            'tag' => 'Tag',
            'aktif' => 'Aktif',
            'kd_pabrik' => 'Kd Pabrik',
            'data_owner' => 'Data Owner',
            'generik' => 'Generik',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKdSatuan()
    {
        return $this->hasOne(AptSatuan::className(), ['id' => 'kd_satuan']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKdSatuanBesar()
    {
        return $this->hasOne(AptSatuanBesar::className(), ['id' => 'kd_satuan_besar']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKdPabrik()
    {
        return $this->hasOne(Pabrik::className(), ['id' => 'kd_pabrik']);
    }
}
