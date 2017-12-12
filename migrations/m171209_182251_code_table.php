<?php

use yii\db\Migration;

/**
 * Class m171209_182251_code
 */
class m171209_182251_code_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('discount', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'zone' => $this->string(),
            'start' => $this->date(),
            'ending' => $this->date(),
            'status' => $this->boolean(),
            'remuneration' => $this->float()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171209_182251_code cannot be reverted.\n";

        return false;
    }
}
