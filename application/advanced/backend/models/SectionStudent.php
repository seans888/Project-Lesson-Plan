<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "section_student".
 *
 * @property integer $id
 * @property integer $section_name
 * @property integer $section_student
 */
class SectionStudent extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'section_student';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['section_name', 'section_student'], 'required'],
            [['section_name', 'section_student'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'section_name' => 'Section Name',
            'section_student' => 'Section Student',
        ];
    }
}
