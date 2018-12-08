<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Actor;
use app\models\Film;
use yii\grid\ActionColumn;
use yii\helpers\ArrayHelper;

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
             'age',
            'genre',
           'phone',
            [
                'attribute'=>'film_name',
                'format' => 'raw',
                'filter'=>ArrayHelper::map(Film::find()->asArray()->all(), 'film_name', 'film_name'),
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
           
          

            [
                'class' => 'yii\grid\ActionColumn',
                // 'visibleButtons' => [
                //     'update' => Yii::$app->user->identity->username == 'admin', // or whatever condition
                //     'delete' => Yii::$app->user->can('update')
                // ],
            ],

            
            
        ],
        
    ]); ?>
</div>
