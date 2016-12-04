<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Section;
use common\models\Schedule;
/* @var $this yii\web\View */
/* @var $model common\models\SectionSchedule */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="section-schedule-form">

    <?php $form = ActiveForm::begin(); ?>


<?= $form->field($model, 'schedule')->dropDownList(
        ArrayHelper::map(Schedule::find()->all(),'id','id'),
        ['prompt' => 'Choose Schedule']
        ) ?>
     <?= $form->field($model, 'section')->dropDownList(
        ArrayHelper::map(Section::find()->all(),'id','sec_name'),
        ['prompt' => 'Section']
        ) ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
