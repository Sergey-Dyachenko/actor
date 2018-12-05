<?php

use yii\db\Migration;

/**
 * Handles the creation of table `actor`.
 */
class m181205_191720_create_actor_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('actor', [
            'id' => $this->primaryKey()->notNull(),
            'first_name' => $this->string(),
            'last_name' => $this->string(),
            'gender' => $this->string(),
            'phone' => $this->string(),
            'age' => $this->integer(),
            'genre' => $this->string(),
            'photo' => $this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('actor');
    }
}
