<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "entity_value".
 *
 * @property int $id
 * @property int|null $id_account
 * @property int|null $id_entity_field
 * @property int|null $id_entity_value_group
 * @property int|null $id_entity
 * @property string|null $value
 */
class EntityValue extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'entity_value';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_account', 'id_entity_field'], 'integer'],
            [['value'], 'string']
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
            'id_entity_field' => 'Id Entity Field',
            'id_entity_value_group' => 'Id Group',
            'id_entity' => 'Id Entity',
            'value' => 'Value',
        ];
    }
}
