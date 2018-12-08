<?php

use yii\db\Migration;

/**
 * Class m181208_214921_fill_data_table_actors
 */
class m181208_214921_fill_data_table_actors extends Migration
{
    /**
     * {@inheritdoc}
     */
    const ACTORTABLE = 'actor';
    public function safeUp()
    {
        $this->insert(self::ACTORTABLE, array(
            'first_name' => 'Robert',
            'last_name' => 'Downey Jr',
            'gender'    => 'male',
            'phone'     => '+123456799',
            'age'       => '53',
            'genre'     => 'action',
            'photo'     => 'robert.jpg'
        ) );

        $this->insert(self::ACTORTABLE, array(
            'first_name' => 'Chris',
            'last_name' => 'Evans',
            'gender'    => 'male',
            'phone'     => '+234567998',
            'age'       => '37',
            'genre'     => 'action',
            'photo'     => 'evans.jpg'
        ) );

        $this->insert(self::ACTORTABLE, array(
            'first_name' => 'Chris',
            'last_name' => 'Hemsworth',
            'gender'    => 'male',
            'phone'     => '+365478978',
            'age'       => '35',
            'genre'     => 'action',
            'photo'     => 'hemsworth.jpg'
        ) );

        $this->insert(self::ACTORTABLE, array(
            'first_name' => 'Chadwick',
            'last_name' => 'Boseman',
            'gender'    => 'male',
            'phone'     => '+4567897898',
            'age'       => '41',
            'genre'     => 'action',
            'photo'     => 'boseman.jpg'
        ) );

        $this->insert(self::ACTORTABLE, array(
            'first_name' => 'Chadwick',
            'last_name' => 'Boseman',
            'gender'    => 'male',
            'phone'     => '+4567897898',
            'age'       => '41',
            'genre'     => 'action',
            'photo'     => 'boseman.jpg'
        ) );

        $this->insert(self::ACTORTABLE, array(
            'first_name' => 'Gal',
            'last_name' => 'Gadot',
            'gender'    => 'female',
            'phone'     => '+5478912333',
            'age'       => '41',
            'genre'     => 'action',
            'photo'     => 'gadot.jpg'
        ) );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181208_214921_fill_data_table_actors cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181208_214921_fill_data_table_actors cannot be reverted.\n";

        return false;
    }
    */
}
