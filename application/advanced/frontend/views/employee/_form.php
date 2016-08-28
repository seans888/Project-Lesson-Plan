<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Job;


/* @var $this yii\web\View */
/* @var $model common\models\Employee */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employee-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'emp_id_num')->textInput() ?>

   
     <?= $form->field($model, 'emp_job')->dropDownList(
        ArrayHelper::map(Job::find()->all(),'id','job_description'),
        ['prompt' => 'Select Job']
        ) ?>

    <?= $form->field($model, 'emp_fname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emp_lname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emp_mname')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
