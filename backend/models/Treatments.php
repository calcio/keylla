<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "treatments".
 *
 * @property int $id
 * @property int $anamnesisId
 */
class Treatments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'treatments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['anamnesisId'], 'required'],
            [['anamnesisId'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'anamnesisId' => 'Anamnesis ID',
        ];
    }
}
