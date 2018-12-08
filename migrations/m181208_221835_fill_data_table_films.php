<?php

use yii\db\Migration;

/**
 * Class m181208_221835_fill_data_table_films
 */
class m181208_221835_fill_data_table_films extends Migration
{
    /**
     * {@inheritdoc}
     */

    const FILMSTABLE = 'film';
    
    public function safeUp()
    {
        $this->insert(self::FILMSTABLE, array(
            'film_name' => 'Iron Man',
        ) );

        $this->insert(self::FILMSTABLE, array(
            'film_name' => 'Captain America: The First Avenger',
        ) );
        
        $this->insert(self::FILMSTABLE, array(
            'film_name' => 'Thor',
        ) );

        $this->insert(self::FILMSTABLE, array(
            'film_name' => 'Black Panther',
        ) );

        $this->insert(self::FILMSTABLE, array(
            'film_name' => 'Avengers: Infinity War',
        ) );

         $this->insert(self::FILMSTABLE, array(
            'film_name' => 'Wonder woman',
        ) );


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181208_221835_fill_data_table_films cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181208_221835_fill_data_table_films cannot be reverted.\n";

        return false;
    }
    */
}
