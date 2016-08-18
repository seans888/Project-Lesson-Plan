<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\SchedPost;

/**
 * SchedSearch represents the model behind the search form about `common\models\SchedPost`.
 */
class SchedSearch extends SchedPost
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'sub_id', 'sec_id', 'acad_year_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = SchedPost::find();

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
            'sub_id' => $this->sub_id,
            'sec_id' => $this->sec_id,
            'acad_year_id' => $this->acad_year_id,
        ]);

        return $dataProvider;
    }
}
