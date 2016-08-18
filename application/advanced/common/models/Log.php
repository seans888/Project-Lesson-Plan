<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "log".
 *
 * @property integer $id
 * @property integer $emp_id
 * @property string $trans_date
 * @property string $trans_time
 *
 * @property Employee $emp
 */
class Log extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'log';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'emp_id', 'trans_date', 'trans_time'], 'required'],
            [['id', 'emp_id'], 'integer'],
            [['trans_date', 'trans_time'], 'safe'],
            [['emp_id'], 'exist', 'skipOnError' => true, 'targetClass' => Employee::className(), 'targetAttribute' => ['emp_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'emp_id' => 'Emp ID',
            'trans_date' => 'Trans Date',
            'trans_time' => 'Trans Time',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmp()
    {
        return $this->hasOne(Employee::className(), ['id' => 'emp_id']);
    }
}
