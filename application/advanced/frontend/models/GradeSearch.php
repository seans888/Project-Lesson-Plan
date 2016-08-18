<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\GradePost;

/**
 * GradeSearch represents the model behind the search form about `common\models\GradePost`.
 */
class GradeSearch extends GradePost
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['acad_year_id', 'grade', 'stud_id', 'emp_id', 'sub_id'], 'integer'],
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
        $query = GradePost::find();

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
            'acad_year_id' => $this->acad_year_id,
            'grade' => $this->grade,
            'stud_id' => $this->stud_id,
            'emp_id' => $this->emp_id,
            'sub_id' => $this->sub_id,
        ]);

        return $dataProvider;
    }
}
