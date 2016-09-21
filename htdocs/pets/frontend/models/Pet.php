<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pet".
 *
 * @property integer $pet_id
 * @property integer $owner_id
 * @property string $name
 * @property string $description
 * @property string $created_at
 * @property string $address
 * @property integer $type_id
 * @property integer $find
 * @property string $img
 *
 * @property User $owner
 * @property PetType $type
 */
class Pet extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $file;

    public static function tableName()
    {
        return 'pet';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['owner_id', 'name', 'description', 'address', 'type_id', 'img'], 'required'],
            [['owner_id', 'type_id', 'find'], 'integer'],
            [['description'], 'string'],
            [['file'], 'file'],
            [['created_at'], 'safe'],
            [['name'], 'string', 'max' => 100],
            [['address', 'img'], 'string', 'max' => 255],
            [['type_id'], 'unique'],
            [['owner_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['owner_id' => 'id']],
            [['type_id'], 'exist', 'skipOnError' => true, 'targetClass' => PetType::className(), 'targetAttribute' => ['type_id' => 'type_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pet_id' => 'Pet ID',
            'owner_id' => 'Owner ID',
            'name' => 'Name',
            'description' => 'Description',
            'created_at' => 'Created At',
            'address' => 'Address',
            'type_id' => 'Type ID',
            'find' => 'Find',
            'img' => 'Logo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOwner()
    {
        return $this->hasOne(User::className(), ['id' => 'owner_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getType()
    {
        return $this->hasOne(PetType::className(), ['type_id' => 'type_id']);
    }
}
