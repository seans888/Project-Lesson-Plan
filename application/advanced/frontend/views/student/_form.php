<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Section;

/* @var $this yii\web\View */
/* @var $model common\models\Student */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'stud_id_num')->textInput() ?>

    <?= $form->field($model, 'stud_fname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stud_lname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stud_mname')->textInput(['maxlength' => true]) ?>

     <?= $form->field($model, 'sec_id')->dropDownList(
        ArrayHelper::map(Section::find()->all(),'id','sec_name'),
        ['prompt' => 'Select Section']
        ) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
