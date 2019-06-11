<?php

use yii\db\Migration;

/**
 * Handles the creation of table `respiratorySystem`.
 */
class m170701_230440_create_respiratorySystem_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('respiratorySystem', [
            'id' => $this->primaryKey(),
            'description' => $this->string(30)->notNull()->unique(),
        ]);

        $columns = [
            'id',
            'description'
        ];

        $values = [
            [1, 'Asma'],
            [2, 'Expectoração'],
            [3, 'Bronquite'],
            [5, 'Pneumunia'],
            [6, 'Amigdalite'],
            [7, 'Sinusite'],
            [8, 'Rinite'],
            [9, 'Palpitação'],
            [10, 'Mãos e pés frios'],
            [11, 'Varizes'],
            [12, 'Pressão'],
        ];

        $this->batchInsert('respiratorySystem', $columns, $values);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('respiratorySystem');
    }
}
