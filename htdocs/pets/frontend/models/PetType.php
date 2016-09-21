<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pet_type".
 *
 * @property integer $type_id
 * @property string $type
 * @property integer $sortes_sort_id
 *
 * @property Pet $pet
 * @property PetSort $sortesSort
 */
class PetType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pet_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type', 'sortes_sort_id'], 'required'],
            [['sortes_sort_id'], 'integer'],
            [['type'], 'string', 'max' => 255],
            [['sortes_sort_id'], 'exist', 'skipOnError' => true, 'targetClass' => PetSort::className(), 'targetAttribute' => ['sortes_sort_id' => 'sort_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'type_id' => 'Type ID',
            'type' => 'Type',
            'sortes_sort_id' => 'Sortes Sort ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPet()
    {
        return $this->hasOne(Pet::className(), ['type_id' => 'type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSortesSort()
    {
        return $this->hasOne(PetSort::className(), ['sort_id' => 'sortes_sort_id']);
    }
}
