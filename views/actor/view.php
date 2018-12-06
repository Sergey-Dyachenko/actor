<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Actor;

/* @var $this yii\web\View */
/* @var $model app\models\Actor */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Actors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="actor-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'attribute' => 'photo',
                'format' => 'html',    
                'value' => function ($data) {
                    return Html::img(Yii::getAlias('@web').'/img/'. $data['photo'],
                        ['width' => '70px']);
                },
            ],
            'first_name',
            'last_name',
            'gender',
            'age',
            'genre',
            [
                'attribute'=>'films',
                'format' => 'raw',
                'value'=>function($model){
     
                    $films = Actor::findOne($model->id)->getFilms()->all();
                    echo '<pre>';
                    var_dump($films);
                    echo '</pre>';
                    die();
                    $films_list = '';
                    $i = 1;
                    foreach ($films as $film){
                        $films_list =  $films_list . $i . ' '. $film->film_name . '</br> ';
                        $i++;        
                    }
                    return $films_list;
                }
            ],
        ],
    ]) ?>

</div>
