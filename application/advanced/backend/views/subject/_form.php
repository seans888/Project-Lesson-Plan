<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Subject */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="subject-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'sub_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'teach_emp_id')->textInput() ?>

    <?= $form->field($model, 'sub_time')->textInput() ?>

    <?= $form->field($model, 'sub_class_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
