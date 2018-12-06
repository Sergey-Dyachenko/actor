<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Actor;
use yii\grid\ActionColumn;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ActorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Actors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="actor-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Actor', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            [
                'attribute' => 'photo',
                'format' => 'html',    
                'value' => function ($data) {
                    return Html::img(Yii::getAlias('@web').'/img/'. $data['photo'],
                        ['width' => '40px']);
                },
            ],
            'first_name',
            'last_name',
            'gender',
           'phone',
            [
                'attribute'=>'films',
                'format' => 'raw',
                'value'=>function($data){
                    $films = Actor::findOne($data->id)->getFilms()->all();
                    $films_list = '';
                    $i = 1;
                    foreach ($films as $film){
                        $films_list =  $films_list . $i . ' '. $film->film_name . '</br> ';
                        $i++;        
                    }
                    return $films_list;
                }
            ],
            //'age',
            //'genre',
          

            ['class' => 'yii\grid\ActionColumn'],
            
        ],
        
    ]); ?>
</div>
