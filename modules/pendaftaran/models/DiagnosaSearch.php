<?php

namespace modules\pendaftaran\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use modules\pendaftaran\models\Diagnosa;

/**
 * DiagnosaSearch represents the model behind the search form of `modules\pendaftaran\models\Diagnosa`.
 */
class DiagnosaSearch extends Diagnosa
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'kd_kunjungan', 'kd_penyakit'], 'integer'],
            [['icdx', 'diagnosa', 'dokter', 'jenis', 'kasus'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Diagnosa::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'kd_kunjungan' => $this->kd_kunjungan,
            'kd_penyakit' => $this->kd_penyakit,
        ]);

        $query->andFilterWhere(['ilike', 'icdx', $this->icdx])
            ->andFilterWhere(['ilike', 'diagnosa', $this->diagnosa])
            ->andFilterWhere(['ilike', 'dokter', $this->dokter])
            ->andFilterWhere(['ilike', 'jenis', $this->jenis])
            ->andFilterWhere(['ilike', 'kasus', $this->kasus]);

        return $dataProvider;
    }
}
