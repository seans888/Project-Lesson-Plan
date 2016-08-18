<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\EmployeePost */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employee-post-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'emp_id')->textInput() ?>

    <?= $form->field($model, 'emp_job')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emp_fname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emp_lname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emp_mname')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
