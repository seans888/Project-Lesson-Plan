<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\AcademicYear;

/**
 * AcademicYearSearch represents the model behind the search form about `common\models\AcademicYear`.
 */
class AcademicYearSearch extends AcademicYear
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['acad_year_start', 'acad_year_end', 'School_Year'], 'safe'],
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
        $query = AcademicYear::find();

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
            'acad_year_start' => $this->acad_year_start,
            'acad_year_end' => $this->acad_year_end,
        ]);

        $query->andFilterWhere(['like', 'School_Year', $this->School_Year]);

        return $dataProvider;
    }
}
