<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "treatmentsEarPoints".
 *
 * @property int $id
 * @property int $earPonitId
 * @property int $anamnesisId
 */
class TreatmentsEarPoints extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'treatmentsEarPoints';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['earPonitId', 'anamnesisId'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'earPonitId' => 'Ear Ponit ID',
            'anamnesisId' => 'Anamnesis ID',
        ];
    }
}
