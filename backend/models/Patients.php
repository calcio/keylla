<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "patients".
 *
 * @property int $id
 * @property int $matrialStatusId
 * @property int $professionId
 * @property string $name
 * @property string $bornDate
 * @property string $address
 * @property int $phone
 * @property int $cellPhone
 * @property string $created_at
 * @property string $updated_at
 *
 * @property MatrialStatus $matrialStatus
 * @property Profession $profession
 */
class Patients extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'patients';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['matrialStatusId', 'professionId', 'name', 'bornDate'], 'required'],
            [['matrialStatusId', 'professionId', 'phone', 'cellPhone'], 'integer'],
            [['bornDate', 'created_at', 'updated_at'], 'safe'],
            [['name'], 'string', 'max' => 180],
            [['address'], 'string', 'max' => 255],
            [['matrialStatusId'], 'exist', 'skipOnError' => true, 'targetClass' => MatrialStatus::className(), 'targetAttribute' => ['matrialStatusId' => 'id']],
            [['professionId'], 'exist', 'skipOnError' => true, 'targetClass' => Profession::className(), 'targetAttribute' => ['professionId' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'matrialStatusId' => 'Matrial Status ID',
            'professionId' => 'Profession ID',
            'name' => 'Name',
            'bornDate' => 'Born Date',
            'address' => 'Address',
            'phone' => 'Phone',
            'cellPhone' => 'Cell Phone',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMatrialStatus()
    {
        return $this->hasOne(MatrialStatus::className(), ['id' => 'matrialStatusId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfession()
    {
        return $this->hasOne(Profession::className(), ['id' => 'professionId']);
    }
}
