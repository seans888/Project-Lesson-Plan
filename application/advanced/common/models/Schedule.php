<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "schedule".
 *
 * @property integer $id
 * @property integer $sub_id
 * @property integer $sub_time_start
 * @property integer $sub_time_end
 * @property integer $teach_id
 * @property integer $acad_year_id
 *
 * @property Subject $sub
 * @property AcademicYear $acadYear
 * @property Employee $teach
 * @property Time $subTimeStart
 * @property Time $subTimeEnd
 */
class Schedule extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'schedule';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sub_id', 'sub_time_start', 'sub_time_end', 'teach_id', 'acad_year_id'], 'required'],
            [['sub_id', 'sub_time_start', 'sub_time_end', 'teach_id', 'acad_year_id'], 'integer'],
            [['sub_id'], 'exist', 'skipOnError' => true, 'targetClass' => Subject::className(), 'targetAttribute' => ['sub_id' => 'id']],
            [['acad_year_id'], 'exist', 'skipOnError' => true, 'targetClass' => AcademicYear::className(), 'targetAttribute' => ['acad_year_id' => 'id']],
            [['teach_id'], 'exist', 'skipOnError' => true, 'targetClass' => Employee::className(), 'targetAttribute' => ['teach_id' => 'id']],
            [['sub_time_start'], 'exist', 'skipOnError' => true, 'targetClass' => Time::className(), 'targetAttribute' => ['sub_time_start' => 'id']],
            [['sub_time_end'], 'exist', 'skipOnError' => true, 'targetClass' => Time::className(), 'targetAttribute' => ['sub_time_end' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sub_id' => 'Subject Name',
            'sub_time_start' => 'Subject Time Start',
            'sub_time_end' => 'Subject Time End',
            'teach_id' => 'Teach ID',
            'acad_year_id' => 'Academic Year',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSub()
    {
        return $this->hasOne(Subject::className(), ['id' => 'sub_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAcadYear()
    {
        return $this->hasOne(AcademicYear::className(), ['id' => 'acad_year_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeach()
    {
        return $this->hasOne(Employee::className(), ['id' => 'teach_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubTimeStart()
    {
        return $this->hasOne(Time::className(), ['id' => 'sub_time_start']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubTimeEnd()
    {
        return $this->hasOne(Time::className(), ['id' => 'sub_time_end']);
    }
}
