<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "quarter".
 *
 * @property integer $id
 * @property integer $academic_year
 * @property string $quarter
 * @property string $quarter_start
 * @property string $quarter_end
 *
 * @property Grade[] $grades
 * @property AcademicYear $academicYear
 */
class Quarter extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'quarter';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['academic_year', 'quarter', 'quarter_start', 'quarter_end'], 'required'],
            [['academic_year'], 'integer'],
            [['quarter_start', 'quarter_end'], 'safe'],
            [['quarter'], 'string', 'max' => 20],
            [['academic_year'], 'exist', 'skipOnError' => true, 'targetClass' => AcademicYear::className(), 'targetAttribute' => ['academic_year' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'academic_year' => 'Academic Year',
            'quarter' => 'Quarter',
            'quarter_start' => 'Quarter Start',
            'quarter_end' => 'Quarter End',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGrades()
    {
        return $this->hasMany(Grade::className(), ['quarter' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAcademicYear()
    {
        return $this->hasOne(AcademicYear::className(), ['id' => 'academic_year']);
    }
}
