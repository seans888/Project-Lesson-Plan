<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\bootstrap\Modal;
use yii\widgets\pjax;

/* @var $this yii\web\View */
/* @var $searchModel common\models\QuarterSeach */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Quarter';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="quarter-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>

       <?= Html::button('Set Quarter', ['value'=>Url::to('index.php?r=quarter/create'),'class' => 'btn btn-success','id'=>'modalButton']) ?>

       
    </p>


 <?php
    Modal::begin([
        'header'=>'<h4>Quarter</h4>',
        'id' => 'modal',
        'size' => 'modal-lg',
        ]);

     echo "<div id='modalContent'></div>";
     Modal::end();
     ?>
<?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
            'attribute'=>'academic_year',
            'value'=>'academicYear.School_Year'
            ],

            //'id',
            
            'quarter',
            'quarter_start',
            'quarter_end',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
