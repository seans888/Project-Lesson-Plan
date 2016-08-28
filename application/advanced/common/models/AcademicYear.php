<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "academic_year".
 *
 * @property integer $id
 * @property string $acad_year_start
 * @property string $acad_year_end
 * @property string $School_Year
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
            [['acad_year_start', 'acad_year_end', 'School_Year'], 'required'],
            [['acad_year_start', 'acad_year_end'], 'safe'],
            [['School_Year'], 'string', 'max' => 11],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'acad_year_start' => 'Academic Year Start (YY/MM/DD)',
            'acad_year_end' => 'Academic Year End (YY/MM/DD)',
            'School_Year' => 'School  Year',
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
