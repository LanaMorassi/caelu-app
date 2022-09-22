<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "journey".
 *
 * @property int $id
 * @property int|null $id_account
 * @property int|null $id_entity
 * @property string|null $trigger_column
 * @property string|null $trigger_condition
 * @property string|null $trigger_condition_value
 * @property string|null $param1
 * @property string|null $param2
 * @property string|null $param3
 * @property string|null $param4
 * @property string|null $param5
 * @property string|null $flg_manual
 */
class Journey extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'journey';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_account', 'id_entity'], 'integer'],
            [['param1', 'param2', 'param3', 'param4', 'param5', 'flg_manual'], 'string'],
            [['trigger_column'], 'string', 'max' => 200],
            [['trigger_condition'], 'string', 'max' => 10],
            [['trigger_condition_value'], 'string', 'max' => 100],
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
            'trigger_column' => 'Trigger Column',
            'trigger_condition' => 'Trigger Condition',
            'trigger_condition_value' => 'Trigger Condition Value',
            'param1' => 'Param1',
            'param2' => 'Param2',
            'param3' => 'Param3',
            'param4' => 'Param4',
            'param5' => 'Param5',
            'flg_manual' => 'Flg Manual',
        ];
    }
}
