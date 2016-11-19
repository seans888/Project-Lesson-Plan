<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "section_schedule".
 *
 * @property integer $id
 * @property integer $section_name
 * @property integer $subject
 * @property integer $subject_time_start
 * @property integer $subject_time_end
 *
 * @property Section $sectionName
 * @property Subject $subject0
 * @property Time $subjectTimeStart
 * @property Time $subjectTimeEnd
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
            [['section_name', 'subject', 'subject_time_start', 'subject_time_end'], 'required'],
            [['section_name', 'subject', 'subject_time_start', 'subject_time_end'], 'integer'],
            [['section_name'], 'exist', 'skipOnError' => true, 'targetClass' => Section::className(), 'targetAttribute' => ['section_name' => 'id']],
            [['subject'], 'exist', 'skipOnError' => true, 'targetClass' => Subject::className(), 'targetAttribute' => ['subject' => 'id']],
            [['subject_time_start'], 'exist', 'skipOnError' => true, 'targetClass' => Time::className(), 'targetAttribute' => ['subject_time_start' => 'id']],
            [['subject_time_end'], 'exist', 'skipOnError' => true, 'targetClass' => Time::className(), 'targetAttribute' => ['subject_time_end' => 'id']],
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
            'subject' => 'Subject',
            'subject_time_start' => 'Subject Time Start',
            'subject_time_end' => 'Subject Time End',
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
    public function getSubject0()
    {
        return $this->hasOne(Subject::className(), ['id' => 'subject']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubjectTimeStart()
    {
        return $this->hasOne(Time::className(), ['id' => 'subject_time_start']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubjectTimeEnd()
    {
        return $this->hasOne(Time::className(), ['id' => 'subject_time_end']);
    }
}
