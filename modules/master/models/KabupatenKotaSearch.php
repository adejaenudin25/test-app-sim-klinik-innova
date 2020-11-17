<?php

namespace modules\master\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use modules\master\models\KabupatenKota;

/**
 * KabupatenKotaSearch represents the model behind the search form of `modules\master\models\KabupatenKota`.
 */
class KabupatenKotaSearch extends KabupatenKota
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'kd_provinsi'], 'integer'],
            [['kabkot', 'ibukota', 'k_bsni'], 'safe'],
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
        $query = KabupatenKota::find();

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
            'kd_provinsi' => $this->kd_provinsi,
        ]);

        $query->andFilterWhere(['ilike', 'kabkot', $this->kabkot])
            ->andFilterWhere(['ilike', 'ibukota', $this->ibukota])
            ->andFilterWhere(['ilike', 'k_bsni', $this->k_bsni]);

        return $dataProvider;
    }
}
