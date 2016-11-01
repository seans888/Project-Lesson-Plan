<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "academic_year".
 *
 * @property integer $id
 * @property string $School_Year
 * @property string $acad_year_start
 * @property string $acad_year_end
 *
 * @property Grade[] $grades
 * @property Schedule[] $schedules
 */
class AcademicYear extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'academic_year';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['School_Year', 'acad_year_start', 'acad_year_end'], 'required'],
            [['acad_year_start', 'acad_year_end'], 'safe'],
            [['School_Year'], 'string', 'max' => 9],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'School_Year' => 'School  Year',
            'acad_year_start' => 'Academic Year Start',
            'acad_year_end' => 'Academic Year End',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGrades()
    {
        return $this->hasMany(Grade::className(), ['acad_year_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchedules()
    {
        return $this->hasMany(Schedule::className(), ['acad_year_id' => 'id']);
    }
}
