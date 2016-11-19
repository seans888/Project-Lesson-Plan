<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "time".
 *
 * @property integer $id
 * @property string $time
 *
 * @property Schedule[] $schedules
 * @property Schedule[] $schedules0
 */
class Time extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'time';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['time'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'time' => 'Time',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchedules()
    {
        return $this->hasMany(Schedule::className(), ['sub_time_start' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchedules0()
    {
        return $this->hasMany(Schedule::className(), ['sub_time_end' => 'id']);
    }
}
