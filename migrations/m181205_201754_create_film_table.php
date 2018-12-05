<?php

use yii\db\Migration;

/**
 * Handles the creation of table `film`.
 */
class m181205_201754_create_film_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('film', [
            'id' => $this->primaryKey(),
            'film_name'=> $this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('film');
    }
}
