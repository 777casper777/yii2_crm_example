<?php
namespace app\controllers;

use yii\web\Controller;
use app\models\ServicePlan;

class ServicePlanController extends Controller
{
    public function actionIndex()
    {
        $plans = ServicePlan::find()->all();
        return $this->render('index', ['plans' => $plans]);
    }
}