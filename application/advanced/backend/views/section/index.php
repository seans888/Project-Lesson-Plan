<?php
use kartik\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Modal;
use common\models\SectionStudentSearch;
use yii\widgets\Pjax;
use kartik\export\ExportMenu;

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
        <?= Html::button('Add Section', ['value'=>Url::to('index.php?r=section/create'),'class' => 'btn btn-success','id'=>'modalButton']) ?>
    </p>

<?php Pjax::begin(); ?>
 <?php
    Modal::begin([
        'header'=>'<h4>Section</h4>',
        'id' => 'modal',
        'size' => 'modal-lg',
        ]);

     echo "<div id='modalContent'></div>";
     Modal::end();
     ?>
<?php
     $gridColumns =[
            'stud_id_num',
            'stud_fname',
            'stud_lname',
            'stud_mname',
            'gender',
     ];

     echo ExportMenu::widget([
        'dataProvider'=>$dataProvider,
        'columns'=>$gridColumns
        ]);
     ?>
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
                
                $searchModel = new SectionStudentSearch();
                $searchModel ->section_name= $model ->id;
                $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

                return Yii::$app->controller->renderPartial('_sectionstudent',[
                       'searchModel'=>$searchModel,
                       'dataProvider'=>$dataProvider, 
                    ]);
            },
            ],

            'sec_name',
            'adviseEmp.emp_lname',
            'adviseEmp.emp_fname',

            ['class' => 'yii\grid\ActionColumn' ],
            ],
    ]);  ?>
    <?php Pjax::end(); ?>
</div>
  