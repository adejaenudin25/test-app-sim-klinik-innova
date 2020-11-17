<?php

namespace modules\master\models;

use Yii;

/**
 * This is the model class for table "tbl_unit".
 *
 * @property int $id
 * @property int $kd_parent
 * @property string $unit
 *
 * @property Kunjungan[] $kunjungans
 * @property Unit $kdParent
 * @property Unit[] $units
 */
class Unit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_unit';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_parent'], 'default', 'value' => null],
            [['kd_parent'], 'integer'],
            [['unit'], 'string', 'max' => 20],
            [['kd_parent'], 'exist', 'skipOnError' => true, 'targetClass' => Unit::className(), 'targetAttribute' => ['kd_parent' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kd_parent' => 'Kd Parent',
            'unit' => 'Unit',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKunjungans()
    {
        return $this->hasMany(Kunjungan::className(), ['kd_unit' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKdParent()
    {
        return $this->hasOne(Unit::className(), ['id' => 'kd_parent']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUnits()
    {
        return $this->hasMany(Unit::className(), ['kd_parent' => 'id']);
    }
}
