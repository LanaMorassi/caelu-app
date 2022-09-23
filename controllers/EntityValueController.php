<?php

namespace app\controllers;

use app\models\EntityValue;
use app\models\EntityValueSearch;
use app\models\JourneyFlow;
use app\models\JourneyFlowGroup;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\base\ErrorException;


/**
 * EntityValueController implements the CRUD actions for EntityValue model.
 */
class EntityValueController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all EntityValue models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new EntityValueSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single EntityValue model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new EntityValue model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new EntityValue();
        $model->id_account = \Yii::$app->user->id;

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing EntityValue model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model->id_account = \Yii::$app->user->id;

        if ($this->request->isPost){
            $this->triggerJourneyChangeValue($model->id_entity_field, $model->value, $this->request->post()['EntityValue']['value']);
        }

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing EntityValue model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the EntityValue model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return EntityValue the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = EntityValue::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    private function triggerJourneyChangeValue($idEntityField, $valueEntity, $changeValueEntity){
       
        try{
            $field_name = (new \yii\db\Query())
            ->select(['*'])
            ->from('entity_field')
            ->where(['id' =>  ($idEntityField)])
            ->one()['name'];

            
            $journeys = (new \yii\db\Query())
            ->select(['*'])
            ->from('journey')
            ->where(['like', 'trigger_condition_value', $field_name])
            ->all();
        
            if($journeys){
                foreach($journeys as $journey){
                    if($journey['trigger_condition'] == '!=' && $changeValueEntity != $valueEntity){
                        
                        $journeyFlowTemplate = (new \yii\db\Query())
                        ->select(['*'])
                        ->from('journey_flow_template')
                        ->where(['id_journey' =>  ($journey['id'])])
                        ->all();
                        
                        $journeyFlowGroup = new JourneyFlowGroup();
                        $journeyFlowGroup->save();

                        foreach($journeyFlowTemplate as $item){
                        
                            $journeyFlow = new JourneyFlow();
                            $journeyFlow->id_journey = $item['id'];
                            $journeyFlow->id_journey_action = $item['id_journey_action'];
                            $journeyFlow->id_journey_flow_group = $journeyFlowGroup['id'];
                            $journeyFlow->dh_created = date('Y-m-d H:i:s');
                            $journeyFlow->flg_exec = 'N';
                            $journeyFlow->flg_first = $item['flg_first'];
                            $journeyFlow->positive_journey_template = $item['positive_journey_template'];
                            $journeyFlow->negative_journey_template = $item['negative_journey_template'];
                            $journeyFlow->save();
                        }
                    }
                }
            }
        } catch (ErrorException $e) {
            Yii::debug('Failed process trigger'. $e);
        }
    }

}
