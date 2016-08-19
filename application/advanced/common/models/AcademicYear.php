<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "academic_year".
 *
 * @property integer $id
 * @property string $acad_year_start
 * @property string $acad_year_end
 * @property string $quart1_start_period
 * @property string $quart1_end_period
 * @property string $quart2_start_period
 * @property string $quart2_end_period
 * @property string $quart3_start_period
 * @property string $quart3_end_period
 * @property string $quart4_start_period
 * @property string $quart14_end_period
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
            [['acad_year_start', 'acad_year_end', 'quart1_start_period', 'quart1_end_period', 'quart2_start_period', 'quart2_end_period', 'quart3_start_period', 'quart3_end_period', 'quart4_start_period', 'quart14_end_period'], 'required'],
            [['acad_year_start', 'acad_year_end', 'quart1_start_period', 'quart1_end_period', 'quart2_start_period', 'quart2_end_period', 'quart3_start_period', 'quart3_end_period', 'quart4_start_period', 'quart14_end_period'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'acad_year_start' => 'Acad Year Start',
            'acad_year_end' => 'Acad Year End',
            'quart1_start_period' => 'Quart1 Start Period',
            'quart1_end_period' => 'Quart1 End Period',
            'quart2_start_period' => 'Quart2 Start Period',
            'quart2_end_period' => 'Quart2 End Period',
            'quart3_start_period' => 'Quart3 Start Period',
            'quart3_end_period' => 'Quart3 End Period',
            'quart4_start_period' => 'Quart4 Start Period',
            'quart14_end_period' => 'Quart14 End Period',
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
