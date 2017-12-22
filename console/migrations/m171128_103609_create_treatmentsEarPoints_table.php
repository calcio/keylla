<?php

use yii\db\Migration;

/**
 * Handles the creation of table `treatmentsEarPoints`.
 */
class m171128_103609_create_treatmentsEarPoints_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('treatmentsEarPoints', [
            'id' => $this->primaryKey(),
            'earPonitId' => $this->integer(),
            'anamnesisId' => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('treatmentsEarPoints');
    }
}
