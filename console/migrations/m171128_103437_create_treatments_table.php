<?php

use yii\db\Migration;

/**
 * Handles the creation of table `treatments`.
 */
class m171128_103437_create_treatments_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('treatments', [
            'id' => $this->primaryKey(),
            'anamnesisId' => $this->integer()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('treatments');
    }
}
