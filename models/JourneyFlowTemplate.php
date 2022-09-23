<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "journey_flow_template".
 *
 * @property int $id
 * @property int|null $id_journey
 * @property int|null $id_journey_action
 * @property string|null $flg_first
 * @property int|null $positive_journey_template
 * @property int|null $negative_journey_template
 */
class JourneyFlowTemplate extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'journey_flow_template';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_journey', 'id_journey_action', 'positive_journey_template', 'negative_journey_template'], 'integer'],
            [['flg_first'], 'string'],
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
            'flg_first' => 'Flg First',
            'positive_journey_template' => 'Positive Journey Template',
            'negative_journey_template' => 'Negative Journey Flow Template',
        ];
    }
}
