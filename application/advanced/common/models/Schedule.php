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
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sub_id' => 'Sub ID',
            'sub_time_start' => 'Sub Time Start',
            'sub_time_end' => 'Sub Time End',
            'teach_id' => 'Teach ID',
            'acad_year_id' => 'Acad Year ID',
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
}
