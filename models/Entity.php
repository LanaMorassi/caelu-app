<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "entity".
 *
 * @property int $id
 * @property int|null $id_account
 * @property string|null $name
 * @property string|null $code
 */
class Entity extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'entity';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_account'], 'integer'],
            [['name'], 'string', 'max' => 100],
            [['code'], 'string', 'max' => 5],
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
            'name' => 'Name',
            'code' => 'Code',
        ];
    }
}
