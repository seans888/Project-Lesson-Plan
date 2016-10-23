<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Section */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sections', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="section-view">

    <h1><?= Html::encode($this->title) ?></h1>

    
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'sec_name',
            'adviseEmp.emp_lname',
            'adviseEmp.emp_fname',
        ],
    ]) ?>

</div>
