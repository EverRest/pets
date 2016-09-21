<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pet_sort".
 *
 * @property integer $sort_id
 * @property string $sort
 *
 * @property PetType[] $petTypes
 */
class PetSort extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pet_sort';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sort'], 'required'],
            [['sort'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sort_id' => 'Sort ID',
            'sort' => 'Sort',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPetTypes()
    {
        return $this->hasMany(PetType::className(), ['sortes_sort_id' => 'sort_id']);
    }
}
