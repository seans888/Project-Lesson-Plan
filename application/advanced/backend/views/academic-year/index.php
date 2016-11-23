<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\bootstrap\Modal;

/* @var $this yii\web\View */
/* @var $searchModel common\models\AcademicYearSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Academic Year';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="academic-year-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::button('Add Academic Year', ['value'=>Url::to('index.php?r=academic-year/create'),'class' => 'btn btn-success','id'=>'modalButton']) ?>
    </p>

    <?php
    Modal::begin([
        'header'=>'<h4>Academic Year</h4>',
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
            'School_Year',
            'acad_year_start',
            'acad_year_end',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
