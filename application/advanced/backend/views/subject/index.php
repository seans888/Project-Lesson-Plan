<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\helpers\Url;
use yii\bootstrap\Modal;
use common\models\ScheduleSearch;
use yii\widgets\pjax;



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
     <?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'export'=>false,
        'hover'=>true,
        'columns' => [
            [
           'class' => 'kartik\grid\ExpandRowColumn',
            'value' => function($model, $key, $index, $column){
                return GridView::ROW_COLLAPSED;
            },
            'detail' => function ($model,$key,$index,$column){
                
                $searchModel = new ScheduleSearch();
                $searchModel ->sub_id= $model->id;
                $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

                return Yii::$app->controller->renderPartial('_submaster',[
                       'searchModel'=>$searchModel,
                       'dataProvider'=>$dataProvider, 
                    ]);
            },
            ],
            'sub_name',
            

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
