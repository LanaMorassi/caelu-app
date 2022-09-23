<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "journey_flow".
 *
 * @property int $id
 * @property int|null $id_journey
 * @property int|null $id_journey_action
 * @property int|null $id_journey_flow_group
 * @property string|null $dh_exec
 * @property string|null $dh_created
 * @property string|null $flg_exec
 * @property string|null $flg_first
 * @property int|null $positive_journey_template
 * @property int|null $negative_journey_template
 */
class JourneyFlow extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'journey_flow';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_journey', 'id_journey_action', 'positive_journey_template', 'negative_journey_template'], 'integer'],
            [['dh_exec', 'dh_created'], 'safe'],
            [['flg_exec', 'flg_first'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_journey' => 'Id Journey',
            'id_journey_action' => 'Id Journey Action',
            'id_journey_flow_group' => 'Group',
            'dh_exec' => 'Dh Exec',
            'dh_created' => 'Dh Created',
            'flg_exec' => 'Flg Exec',
            'flg_first' => 'Flg First',
            'positive_journey_template' => 'Positive Journey Template',
            'negative_journey_template' => 'Negative Journey Template'
        ];
    }
}
