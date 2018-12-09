<?php

namespace app\controllers;

use yii\rest\ActiveController;


class RestController extends ActiveController
{
    public $modelClass = 'app\models\Actor';
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
      return 
      \yii\helpers\ArrayHelper::merge(parent::behaviors(),[
        'crosFilter' => [
            'class' => \yii\filters\Cors::className(),
        ],
      ]);
    }


   
}
