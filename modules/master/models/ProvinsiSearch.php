<?php

namespace modules\master\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use modules\master\models\Provinsi;

/**
 * ProvinsiSearch represents the model behind the search form of `modules\master\models\Provinsi`.
 */
class ProvinsiSearch extends Provinsi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['provinsi', 'p_bsni'], 'safe'],
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
        $query = Provinsi::find();

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
        ]);

        $query->andFilterWhere(['ilike', 'provinsi', $this->provinsi])
            ->andFilterWhere(['ilike', 'p_bsni', $this->p_bsni]);

        return $dataProvider;
    }
}
