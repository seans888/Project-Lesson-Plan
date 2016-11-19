<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "section_student".
 *
 * @property integer $id
 * @property integer $section_name
 * @property integer $section_student
 *
 * @property Section $sectionName
 * @property Student $sectionStudent
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
            [['section_name'], 'exist', 'skipOnError' => true, 'targetClass' => Section::className(), 'targetAttribute' => ['section_name' => 'id']],
            [['section_student'], 'exist', 'skipOnError' => true, 'targetClass' => Student::className(), 'targetAttribute' => ['section_student' => 'id']],
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSectionName()
    {
        return $this->hasOne(Section::className(), ['id' => 'section_name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSectionStudent()
    {
        return $this->hasOne(Student::className(), ['id' => 'section_student']);
    }
}
