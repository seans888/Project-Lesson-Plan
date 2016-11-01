<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Employee;

/* @var $this yii\web\View */
/* @var $model common\models\Section */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="section-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'sec_name')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'advise_emp_id')->dropDownList(
        ArrayHelper::map(Employee::find()->all(),'id','emp_lname','emp_fname'),
        ['prompt' => 'Select Class Adviser']
        ) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Add Section' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
