<?php

namespace modules\master\models;

use Yii;

/**
 * This is the model class for table "tbl_pabrik".
 *
 * @property int $id
 * @property string $account
 * @property string $pabrik
 * @property string $contact
 * @property string $alamat
 * @property string $kota
 * @property string $telepon1
 * @property string $telepon2
 * @property string $fax
 * @property string $kd_pos
 * @property string $negara
 * @property double $beg_bal
 * @property double $currents
 * @property string $cr_limit
 * @property string $finance
 * @property int $term
 * @property int $pbf
 * @property double $disc_faktur
 * @property string $disc_saldo
 * @property string $norek
 *
 * @property AptObat[] $aptObats
 */
class Pabrik extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_pabrik';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['beg_bal', 'currents', 'cr_limit', 'finance', 'disc_faktur', 'disc_saldo'], 'number'],
            [['term', 'pbf'], 'default', 'value' => null],
            [['term', 'pbf'], 'integer'],
            [['account', 'telepon1', 'telepon2', 'fax'], 'string', 'max' => 15],
            [['pabrik'], 'string', 'max' => 40],
            [['contact', 'kota'], 'string', 'max' => 30],
            [['alamat'], 'string', 'max' => 50],
            [['kd_pos'], 'string', 'max' => 5],
            [['negara', 'norek'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'account' => 'Account',
            'pabrik' => 'Pabrik',
            'contact' => 'Contact',
            'alamat' => 'Alamat',
            'kota' => 'Kota',
            'telepon1' => 'Telepon1',
            'telepon2' => 'Telepon2',
            'fax' => 'Fax',
            'kd_pos' => 'Kd Pos',
            'negara' => 'Negara',
            'beg_bal' => 'Beg Bal',
            'currents' => 'Currents',
            'cr_limit' => 'Cr Limit',
            'finance' => 'Finance',
            'term' => 'Term',
            'pbf' => 'Pbf',
            'disc_faktur' => 'Disc Faktur',
            'disc_saldo' => 'Disc Saldo',
            'norek' => 'Norek',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAptObats()
    {
        return $this->hasMany(AptObat::className(), ['kd_pabrik' => 'id']);
    }
}
