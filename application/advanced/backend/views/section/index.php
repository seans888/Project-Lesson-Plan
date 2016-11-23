<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\bootstrap\Modal;


/* @var $this yii\web\View */
/* @var $searchModel common\models\SectionPost */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Section';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="section-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
<<<<<<< HEAD
        <?= Html::button('Add Section', ['value'=>Url::to('index.php?r=section/create'),'class' => 'btn btn-success','id'=>'modalButton']) ?>
=======
        <?= Html::button('Create Section', ['value'=>Url::to('index.php?r=section/create'),'class' => 'btn btn-success','id'=>'modalButton']) ?>
>>>>>>> e821bf5e8949f6496f6a004ecd457f7b28c7d33c
    </p>


 <?php
    Modal::begin([
        'header'=>'<h4>Section</h4>',
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
            'sec_name',
            'adviseEmp.emp_lname',
            'adviseEmp.emp_fname',
            

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
