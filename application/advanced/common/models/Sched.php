<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "sched".
 *
 * @property integer $id
 * @property integer $sub_id
 * @property integer $sec_id
 * @property integer $acad_year_id
 *
 * @property Subject $sub
 * @property Section $sec
 * @property AcademicYear $acadYear
 */
class Sched extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sched';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'sub_id', 'sec_id', 'acad_year_id'], 'required'],
            [['id', 'sub_id', 'sec_id', 'acad_year_id'], 'integer'],
            [['sub_id'], 'exist', 'skipOnError' => true, 'targetClass' => Subject::className(), 'targetAttribute' => ['sub_id' => 'id']],
            [['sec_id'], 'exist', 'skipOnError' => true, 'targetClass' => Section::className(), 'targetAttribute' => ['sec_id' => 'id']],
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
            'sec_id' => 'Sec ID',
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
    public function getSec()
    {
        return $this->hasOne(Section::className(), ['id' => 'sec_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAcadYear()
    {
        return $this->hasOne(AcademicYear::className(), ['id' => 'acad_year_id']);
    }
}
