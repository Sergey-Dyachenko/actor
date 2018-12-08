<?php

use yii\db\Migration;

/**
 * Class m181208_222735_fill_data_table_actor_film
 */
class m181208_222735_fill_data_table_actor_film extends Migration
{
    const ACTORFILMTABLE = 'actor_film';
    
    public function safeUp()
    {
        $this->insert(self::ACTORFILMTABLE, array(
            'actor_id' => 1,
            'film_id' => 1,
        ) );

        $this->insert(self::ACTORFILMTABLE, array(
            'actor_id' => 1,
            'film_id' => 5,
        ) );
        
        $this->insert(self::ACTORFILMTABLE, array(
            'actor_id' => 2,
            'film_id' => 2,
        ) );

        $this->insert(self::ACTORFILMTABLE, array(
            'actor_id' => 2,
            'film_id' => 5,
        ) );

        $this->insert(self::ACTORFILMTABLE, array(
            'actor_id' => 3,
            'film_id' => 3,
        ) );

        $this->insert(self::ACTORFILMTABLE, array(
            'actor_id' => 3,
            'film_id' => 5,
        ) );

        $this->insert(self::ACTORFILMTABLE, array(
            'actor_id' => 4,
            'film_id' => 4,
        ) );

        $this->insert(self::ACTORFILMTABLE, array(
            'actor_id' => 4,
            'film_id' => 5,
        ) );

        $this->insert(self::ACTORFILMTABLE, array(
            'actor_id' => 5,
            'film_id' => 6,
        ) );

    }            
    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181208_222735_fill_data_table_actor_film cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181208_222735_fill_data_table_actor_film cannot be reverted.\n";

        return false;
    }
    */
}
