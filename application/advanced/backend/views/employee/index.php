<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\bootstrap\Modal;

/* @var $this yii\web\View */
/* @var $searchModel common\models\EmployeeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Employee';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employee-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::button('Add Employee', ['value'=>Url::to('index.php?r=employee/create'),'class' => 'btn btn-success','id'=>'modalButton']) ?>
    </p>

<?php
    Modal::begin([
        'header'=>'<h4>Employee</h4>',
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
            'emp_id_num',
            'empJob.job_description',
            'emp_fname',
            'emp_lname',
            //'emp_mname',
            // 'email:email',
            // 'contact_number',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
