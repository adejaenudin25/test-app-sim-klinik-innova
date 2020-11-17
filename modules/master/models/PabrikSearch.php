<?php

namespace modules\master\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use modules\master\models\Pabrik;

/**
 * PabrikSearch represents the model behind the search form of `modules\master\models\Pabrik`.
 */
class PabrikSearch extends Pabrik
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'term', 'pbf'], 'integer'],
            [['account', 'pabrik', 'contact', 'alamat', 'kota', 'telepon1', 'telepon2', 'fax', 'kd_pos', 'negara', 'norek'], 'safe'],
            [['beg_bal', 'currents', 'cr_limit', 'finance', 'disc_faktur', 'disc_saldo'], 'number'],
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
        $query = Pabrik::find();

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
            'beg_bal' => $this->beg_bal,
            'currents' => $this->currents,
            'cr_limit' => $this->cr_limit,
            'finance' => $this->finance,
            'term' => $this->term,
            'pbf' => $this->pbf,
            'disc_faktur' => $this->disc_faktur,
            'disc_saldo' => $this->disc_saldo,
        ]);

        $query->andFilterWhere(['ilike', 'account', $this->account])
            ->andFilterWhere(['ilike', 'pabrik', $this->pabrik])
            ->andFilterWhere(['ilike', 'contact', $this->contact])
            ->andFilterWhere(['ilike', 'alamat', $this->alamat])
            ->andFilterWhere(['ilike', 'kota', $this->kota])
            ->andFilterWhere(['ilike', 'telepon1', $this->telepon1])
            ->andFilterWhere(['ilike', 'telepon2', $this->telepon2])
            ->andFilterWhere(['ilike', 'fax', $this->fax])
            ->andFilterWhere(['ilike', 'kd_pos', $this->kd_pos])
            ->andFilterWhere(['ilike', 'negara', $this->negara])
            ->andFilterWhere(['ilike', 'norek', $this->norek]);

        return $dataProvider;
    }
}
