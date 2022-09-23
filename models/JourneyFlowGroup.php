<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "journey_flow_group".
 *
 * @property int $id
 */
class JourneyFlowGroup extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'journey_flow_group';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
        ];
    }
}
