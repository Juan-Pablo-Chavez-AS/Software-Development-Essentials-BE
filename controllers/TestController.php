<?php

namespace app\controllers;

use app\utils\RandomMammalGenerator;
use yii\base\Controller;
use Yii;

class TestController extends Controller
{
    public function beforeAction($action)
    {
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return parent::beforeAction($action);
    }

    public function actionRandomMammalMove()
    {
        $randomMammal = RandomMammalGenerator::generate();
        return [
            $randomMammal->getSpecie() => $randomMammal->move(),
        ];
    }

}