<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "entity_field".
 *
 * @property int $id
 * @property int|null $id_account
 * @property int|null $id_entity
 * @property int|null $id_entity_field_type
 * @property string|null $display_name
 * @property string|null $name
 * @property string|null $description
 */
class EntityField extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'entity_field';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_account', 'id_entity', 'id_entity_field_type'], 'integer'],
            [['description'], 'string'],
            [['display_name', 'name'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_account' => 'Id Account',
            'id_entity' => 'Id Entity',
            'id_entity_field_type' => 'Id Entity Field Type',
            'display_name' => 'Display Name',
            'name' => 'Name',
            'description' => 'Description',
        ];
    }
}
