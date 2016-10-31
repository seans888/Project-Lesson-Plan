<?php

namespace common;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Quarter;

/**
 * modelsQuarterSearch represents the model behind the search form about `common\models\Quarter`.
 */
class modelsQuarterSearch extends Quarter
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'School_Year', 'quarter'], 'integer'],
            [['quarter_start', 'quarter_end'], 'safe'],
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
        $query = Quarter::find();

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
            'School_Year' => $this->School_Year,
            'quarter' => $this->quarter,
            'quarter_start' => $this->quarter_start,
            'quarter_end' => $this->quarter_end,
        ]);

        return $dataProvider;
    }
}
