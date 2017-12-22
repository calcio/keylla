<?php

use yii\db\Migration;

/**
 * Handles the creation of table `emotions`.
 */
class m171128_100919_create_emotions_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('emotions', [
            'id' => $this->primaryKey(),
            'description' => $this->string(20)->notNull()->unique(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('emotions');
    }
}
