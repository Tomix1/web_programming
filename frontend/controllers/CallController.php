<?php

namespace frontend\controllers;

class CallController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model = new \app\models\Call;

        return $this->render('Call', ['model'=> $model]);
    }
}
