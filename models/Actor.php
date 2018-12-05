<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "actor".
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $gender
 * @property string $phone
 * @property int $age
 * @property string $genre
 * @property string $photo
 */
class Actor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'actor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['age'], 'integer'],
            [['first_name', 'last_name', 'gender', 'phone', 'genre', 'photo'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'gender' => 'Gender',
            'phone' => 'Phone',
            'age' => 'Age',
            'genre' => 'Genre',
            'photo' => 'Photo',
        ];
    }

    public function getFilms()
    {
        return $this->hasMany(Film::className(), ['id' => 'film_id'])
        ->viaTable('actor_film', ['actor_id' => 'id']);
    }
}
