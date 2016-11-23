<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\bootstrap\Modal;


/* @var $this yii\web\View */
/* @var $searchModel common\models\SubjectPost */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Subjects';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subject-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>

        <?= Html::button('Add Subject', ['value'=>Url::to('index.php?r=subject/create'),'class' => 'btn btn-success','id'=>'modalButton']) ?>

        <?= Html::button('Create Subject', ['value'=>Url::to('index.php?r=subject/create'),'class' => 'btn btn-success','id'=>'modalButton']) ?>

    </p>


 <?php
    Modal::begin([
        'header'=>'<h4>Subject</h4>',
        'id' => 'modal',
        'size' => 'modal-lg',
        ]);

     echo "<div id='modalContent'></div>";
     Modal::end();
     ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'sub_name',
            //'subject_description',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
