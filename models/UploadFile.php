<?php

namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;

class UploadFile extends Model
{
    public $imageFile;

    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'jpg'],
        ];
    }

    public function uploadFile(){
        if ($this->validate()){
            $this->imageFile->saveAs('img/' . $this->imageFile->baseName . '.'.$this->imageFile->extension);
            return true;
        }
        else {
            return false;
        }
    }
}

