<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "section".
 *
 * @property integer $id
 * @property string $sec_name
 * @property integer $advise_emp_id
 *
 * @property Employee $adviseEmp
 */
class Section extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'section';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sec_name', 'advise_emp_id'], 'required'],
            [['advise_emp_id'], 'integer'],
            [['sec_name'], 'string', 'max' => 35],
            [['advise_emp_id'], 'exist', 'skipOnError' => true, 'targetClass' => Employee::className(), 'targetAttribute' => ['advise_emp_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sec_name' => 'Section Name',
            'advise_emp_id' => 'Advise Emp ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdviseEmp()
    {
        return $this->hasOne(Employee::className(), ['id' => 'advise_emp_id']);
    }
}
