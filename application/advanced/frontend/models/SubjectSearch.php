<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\SubjectPost;

/**
 * SubjectSearch represents the model behind the search form about `common\models\SubjectPost`.
 */
class SubjectSearch extends SubjectPost
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'emp_id'], 'integer'],
            [['sub_name', 'sub_time'], 'safe'],
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
        $query = SubjectPost::find();

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
            'emp_id' => $this->emp_id,
            'sub_time' => $this->sub_time,
        ]);

        $query->andFilterWhere(['like', 'sub_name', $this->sub_name]);

        return $dataProvider;
    }
}
