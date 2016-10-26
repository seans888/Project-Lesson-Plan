<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SectionSchedule */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="section-schedule-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'section_name')->textInput() ?>

    <?= $form->field($model, 'subject')->textInput() ?>

    <?= $form->field($model, 'subject_time_start')->textInput() ?>

    <?= $form->field($model, 'subject_time_end')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
