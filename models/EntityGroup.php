<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "entity_group".
 *
 * @property int $id
 * @property int|null $id_account
 * @property int|null $id_entity
 */
class EntityGroup extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'entity_group';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_account', 'id_entity'], 'integer'],
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
        ];
    }
}
