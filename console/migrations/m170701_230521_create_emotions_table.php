<?php

use yii\db\Migration;

/**
 * Handles the creation of table `emotions`.
 */
class m170701_230521_create_emotions_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('emotions', [
            'id' => $this->primaryKey(),
            'description' => $this->string(30)->notNull()->unique(),
        ]);

        $columns = [
            'id',
            'description'
        ];

        $values = [
            [1, 'Tristeza'],
            [2, 'Preocupação'],
            [3, 'Alegria/Euforia'],
            [5, 'Raiva'],
            [6, 'Medo'],
        ];

        $this->batchInsert('emotions', $columns, $values);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('emotions');
    }
}
