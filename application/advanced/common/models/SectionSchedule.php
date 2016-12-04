<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "section_schedule".
 *
 * @property integer $id
 * @property integer $schedule
 * @property integer $section
 *
 * @property Schedule $schedule0
 * @property Section $section0
 */
class SectionSchedule extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'section_schedule';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['schedule', 'section'], 'required'],
            [['schedule', 'section'], 'integer'],
            [['schedule'], 'exist', 'skipOnError' => true, 'targetClass' => Schedule::className(), 'targetAttribute' => ['schedule' => 'id']],
            [['section'], 'exist', 'skipOnError' => true, 'targetClass' => Section::className(), 'targetAttribute' => ['section' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'schedule' => 'Schedule',
            'section' => 'Section',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchedule0()
    {
        return $this->hasOne(Schedule::className(), ['id' => 'schedule']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSection0()
    {
        return $this->hasOne(Section::className(), ['id' => 'section']);
    }
}
