<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Quarter;

/**
 * QuarterSeach represents the model behind the search form about `common\models\Quarter`.
 */
class QuarterSeach extends Quarter
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'academic_year'], 'integer'],
            [['quarter', 'quarter_start', 'quarter_end'], 'safe'],
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
            'academic_year' => $this->academic_year,
            'quarter_start' => $this->quarter_start,
            'quarter_end' => $this->quarter_end,
        ]);

        $query->andFilterWhere(['like', 'quarter', $this->quarter]);

        return $dataProvider;
    }
}
