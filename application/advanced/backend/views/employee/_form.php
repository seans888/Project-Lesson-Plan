<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Employee */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employee-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'emp_id_num')->textInput() ?>

    <?= $form->field($model, 'emp_job')->textInput() ?>

    <?= $form->field($model, 'emp_fname')->textInput() ?>

    <?= $form->field($model, 'emp_lname')->textInput() ?>

    <?= $form->field($model, 'emp_mname')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
