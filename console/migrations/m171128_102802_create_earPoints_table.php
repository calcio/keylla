<?php

use yii\db\Migration;

/**
 * Handles the creation of table `earPoints`.
 */
class m171128_102802_create_earPoints_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('earPoints', [
            'id' => $this->primaryKey(),
            'name' => $this->string(50)->notNull()->unique(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('earPoints');
    }
}
