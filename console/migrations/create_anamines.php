<?php

use yii\db\Migration;

/**
 * Handles the creation of table `anamneses`.
 */
class m170701_234018_create_anamneses_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('anamneses', [
            'id' => $this->primaryKey(),
            'anamneseDeseaseId' => $this->integer()->notNull(),
            'anamneseSurgeryId' => $this->integer()->notNull(),
            'anamneseFlavorId' => $this->integer()->notNull(),
            'menstruationId' => $this->integer()->notNull(),
            'pa' => $this->string(5),
            'complaint' => $this->string(200)->notNull,
            'treatments_exams' => $this->string(500),
            'medicament' => $this->string(500),
            'medicationArlegic' => $this->boolean(),
            'medicationArlegicDesc' => $this->string(500),
            'metalArlegic' => $this->boolean(),
            'tapeArlegic' => $this->boolean(),
            'historic' => $this->string(2000),
            'urine' => $this->boolean(),
            'urineColor' => $this->string(15),
            'urinePain' => $this->boolean(),
            'urineFrequency' => $this->string(20),
            'urinePainWeight' => $this->boolean(),
            'urineIncontinence' => $this->boolean(),
            'urineRetention' => $this->boolean(),
            'urineInfection' => $this->boolean(),
            'discharge' => $this->boolean(),
            'menstruationColor' => $this->string(15),
            'mestruationCoagulant' => $this->boolean(),
            'mestruationDuration' => $this->smallInteger(),
            'mestruationIntensity' => $this->string(15),
            'sexualActivity' => $this->boolean(),
            'pregnancy' => $this->boolean(),
            'childBirth' => $this->string(150),
            'abortion' => $this->string(150),
            'contraceptive' => $this->boolean(),
            'insomnia' => $this->boolean(),
            'insomniaTime' => $this->time(),
            'somnolence' => $this->boolean(),
            'memory' => $this->string(150),
            'dormancy' => $this->boolean(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('anamneses');
    }
}
<?php

use yii\db\Migration;

/**
 * Handles the creation of table `anamneses`.
 */
class m170701_234018_create_anamneses_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('anamines', [
            'id' => $this->primaryKey(),
            'patientId' => $this->integer()->notNull(),
            'deseaseId' => $this->integer()->notNull(),
            'surgeryId' => $this->integer()->notNull(),
            'emotionId' => $this->integer()->notNull(),
            'flavorId' => $this->integer()->notNull(),
            'menstruationId' => $this->integer()->notNull(),
            'pa' => $this->string(5),
            'complaint' => $this->string(200)->notNull,
            'treatmentsExams' => $this->string(500),
            'medicament' => $this->string(500),
            'medicationArlegic' => $this->boolean()->notNull(),
            'medicationArlegicDesc' => $this->string(500),
            'metalArlegic' => $this->boolean()->notNull(),
            'tapeArlegic' => $this->boolean()->notNull(),
            'historic' => $this->string(2000),
            'dailyRoutine' => $this->string(3000),
            'excrcise' => $this->string(250),
            'appetite' => $this->string(150),
            'chew' => $this->string(150),
            'nausea' => $this->boolean(),
            'nauseaDescription' => $this->string(200),
            'intertinalFunction' => $this->string(200),
            'faeces' => $this->string(200),
            'hemorrhoid' => $this->boolean(),
            'undigestedFood' => $this->boolean(),
            'undigestedFoodDescription' => $this->string(200),
            'gastritis' => $this->boolean(),
            'ulcer' => $this->boolean(),
            'biliaryLithiasis' => $this->boolean(),
            'dryMouth' => $this->boolean(),
            'drinkLotsOfWater' => $this->boolean(),
            'bitterMouth' => $this->boolean(),
            'withoutThirst' => $this->boolean(),
            'urine' => $this->boolean(),
            'urineColor' => $this->string(15),
            'urinePain' => $this->boolean(),
            'urineFrequency' => $this->string(100),
            'urinePainWeight' => $this->boolean(),
            'urineIncontinence' => $this->boolean(),
            'urineRetention' => $this->boolean(),
            'urineInfection' => $this->boolean(),
            'discharge' => $this->boolean(),
            'menstruationColor' => $this->string(15),
            'mestruationCoagulant' => $this->boolean(),
            'mestruationDuration' => $this->smallInteger(),
            'mestruationIntensity' => $this->string(15),
            'sexualActivity' => $this->boolean(),
            'pregnancy' => $this->boolean(),
            'childBirth' => $this->string(150),
            'abortion' => $this->string(150),
            'contraceptive' => $this->boolean(),
            'insomnia' => $this->boolean(),
            'insomniaTime' => $this->time(),
            'somnolence' => $this->boolean(),
            'memory' => $this->string(150),
            'dormancy' => $this->boolean(),
            'sensitivity' => $this->string(150),
            'concentration' => $this->string(150),
            'headache' => $this->boolean(),
            'vertigo' => $this->boolean(),
            'dizziness' => $this->boolean(),
            'perspiration' => $this->string(150),
            'hearing' => $this->string(150),
            'sight' => $this->string(150),
            'bones' => $this->string(150),
            'skin' => $this->string(150),
            'hair' => $this->string(150),
            'nails' => $this->string(150),
            'pains' => $this->string(150),
            'arthritis' => $this->string(150),
            'arthrosis' => $this->string(150),
            'addictions' => $this->string(150),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('anamneses');
    }
}
