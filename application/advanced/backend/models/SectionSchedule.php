<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "section_schedule".
 *
 * @property integer $id
 * @property integer $section_name
 * @property integer $subject
 * @property integer $subject_time_start
 * @property integer $subject_time_end
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
}
