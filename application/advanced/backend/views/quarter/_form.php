<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\AcademicYear;

/* @var $this yii\web\View */
/* @var $model common\models\Quarter */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="quarter-form">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'academic_year')->dropDownList(
        ArrayHelper::map(AcademicYear::find()->all(),'id','School_Year'),
        ['prompt' => 'Choose Academic Year']
        ) ?> 

    <?= $form->field($model, 'quarter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'quarter_start')->textInput() ?>

    <?= $form->field($model, 'quarter_end')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
