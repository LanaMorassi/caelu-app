<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\EntityValue;

/**
 * EntityValueSearch represents the model behind the search form of `app\models\EntityValue`.
 */
class EntityValueSearch extends EntityValue
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_account', 'id_entity_field'], 'integer'],
            [['id_entity_value_group', 'value'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = EntityValue::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'id_account' => $this->id_account,
            'id_entity_field' => $this->id_entity_field,
        ]);

        $query->andFilterWhere(['like', 'id_entity_value_group', $this->id_entity_value_group])
            ->andFilterWhere(['like', 'value', $this->value]);

        return $dataProvider;
    }
}
