<?php

use yii\db\Migration;

/**
 * Handles the creation of table `actor_film`.
 */
class m181205_202833_create_actor_film_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('actor_film', [
            'id' => $this->primaryKey()->notNull(),
            'actor_id' => $this->integer(),
            'film_id' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('actor_film');
    }
}
