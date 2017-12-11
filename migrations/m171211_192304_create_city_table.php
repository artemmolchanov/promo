<?php

use yii\db\Migration;

/**
 * Handles the creation of table `city`.
 */
class m171211_192304_create_city_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('city', [
            'id' => $this->primaryKey(),
            'city_name' => $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('city');
    }
}
