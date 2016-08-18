<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\StudentPost */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-post-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'stud_fname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stud_lname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stud_mname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sec_id')->textInput() ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
