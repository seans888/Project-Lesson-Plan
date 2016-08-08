<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "grade".
 *
 * @property integer $acad_year_id
 * @property integer $grade
 * @property integer $stud_id
 * @property integer $emp_id
 * @property integer $sub_id
 */
class Grade extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'grade';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['acad_year_id', 'grade', 'stud_id', 'emp_id', 'sub_id'], 'required'],
            [['acad_year_id', 'grade', 'stud_id', 'emp_id', 'sub_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'acad_year_id' => 'Acad Year ID',
            'grade' => 'Grade',
            'stud_id' => 'Stud ID',
            'emp_id' => 'Emp ID',
            'sub_id' => 'Sub ID',
        ];
    }
}
