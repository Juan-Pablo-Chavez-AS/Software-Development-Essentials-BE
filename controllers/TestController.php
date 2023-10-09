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

    /**
     * Depends on an abstraction rather than checking types to act accordingly,
     * therefore Open-Closed is in play too.
     */
    public function actionRandomMammalMove()
    {
        $randomMammal = RandomMammalGenerator::generate();
        $specie = $randomMammal->getSpecie();
        $move = $randomMammal->move();
        return [
            $specie => $move,
        ];
    }

}