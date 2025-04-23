<?php
namespace app\controllers;

use yii\web\Controller;
use app\models\ClientRequest;
use yii\data\ActiveDataProvider;
use Yii;

class ClientRequestController extends Controller
{
    public function actionCreate()
    {
        $model = new ClientRequest(Yii::$app->request->post());
        if ($model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }
        return $this->render('create', ['model' => $model]);
    }

    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => ClientRequest::find()
        ]);
        return $this->render('index', ['dataProvider' => $dataProvider]);
    }
}