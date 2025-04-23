<?php
namespace app\controllers;

use yii\web\Controller;
use app\models\Client;
use Yii;

class ClientController extends Controller
{
    public function actionCreate()
    {
        $model = new Client();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }
        return $this->render('create', ['model' => $model]);
    }
}